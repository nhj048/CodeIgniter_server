<!-- SEARCH -->
<section id="search">
  <div class="inbox searchBox">
    <ul class="rec">
      <li>추천 검색어 : </li>
      <li><a href="#">서울 아파트</a></li>
      <li><a href="#">부산 빌라</a></li>
      <li><a href="#">가산동 사무실</a></li>
      <li><a href="#">2017타경 0000</a></li>
      <li><a href="#">인천 목욕시설</a></li>
    </ul>
    <ul class="searchBar">
      <li>
        <label for="searchCltrNm">통합검색</label>
      </li>
      <li>
        <input id="searchCltrNm" name="searchCltrNm" type="text" placeholder="원하는 물건을 입력하세요.">
      </li>
    </ul>
    <div class="smallbox">
      <ul class="caNo">
        <li>사건번호</li>
        <li>
          <select>
            <option value="2019">2019</option>
            <option value="2018">2018</option>
            <option value="2017">2017</option>
            <option value="2016">2016</option>
            <option value="2015">2015</option>
            <option value="2014">2014</option>
          </select>
        </li>
        <li>타경</li>
        <li>
          <input type="text" name="searchCaNo" placeholder="사건번호">
        </li>
      </ul>
      <ul class="caCal">
        <li>매각기일</li>
        <li>
          <select>
            <option value="1">2019-01-17</option>
            <option value="2">달력이</option>
            <option value="3">나올</option>
            <option value="4">예정입니다.</option>
          </select>
        </li>
        <li class="wave">~</li>
        <li>
          <select>
            <option value="1">2019-01-24</option>
            <option value="2">달력이</option>
            <option value="3">나올</option>
            <option value="4">예정입니다.</option>
          </select>
        </li>
      </ul>
    </div>
    <input type="submit" value="검색하기" id="topSearchBtn">
    <div class="tabBox">
      <ul>
        <li class="mulgun"><a href="#">물건종류</a></li>
        <li class="sojae"><a href="#">소재지</a></li>
        <li class="price"><a href="#">가격 / 면적</a></li>
        <li class="sagun"><a href="#">사건현황</a></li>
        <li class="special"><a href="#">특수권리 / 물건</a></li>
      </ul>
    </div>
    <div id="searchContBox">
      <!-- mulgunBox -->
      <div class="mulgunBox">
        <div class="selBox">
          <ul class="jugeo">
            <li class="firstChk">
              <input type="checkbox" name="jugeo" value="jugeo" id="jugeo">
              <label for="jugeo">주거시설</label>
            </li>
            <li class="sangseChkBox">
              <ul class="sangseChk">
                <li>
                  <input type="checkbox" name="jugeo" value="jugeo">
                아파트</li>
                <li>
                  <input type="checkbox" name="jugeo" value="jugeo">
                단독주택</li>
                <li>
                  <input type="checkbox" name="jugeo" value="jugeo">
                다가구(원룸)</li>
                <li>
                  <input type="checkbox" name="jugeo" value="jugeo">
                다세대(빌라)</li>
                <li>
                  <input type="checkbox" name="jugeo" value="jugeo">
                근린주택</li>
                <li>
                  <input type="checkbox" name="jugeo" value="jugeo">
                오피스텔(주거용)</li>
              </ul>
            </li>
          </ul>
          <ul class="sangup">
            <li class="firstChk">
              <input type="checkbox" name="sangup" value="sangup">
            상업 / 사무실</li>
            <li class="sangseChkBox">
              <ul class="sangseChk">
                <li>
                  <input type="checkbox" name="sangup" value="sangup">
                근린상가</li>
                <li>
                  <input type="checkbox" name="sangup" value="sangup">
                근린시설</li>
                <li>
                  <input type="checkbox" name="sangup" value="sangup">
                오피스텔</li>
                <li>
                  <input type="checkbox" name="sangup" value="sangup">
                사무실</li>
              </ul>
            </li>
          </ul>
          <ul class="gongjang">
            <li class="firstChk">
              <input type="checkbox" name="gongjang" value="gongjang">
            공장 / 창고</li>
            <li class="sangseChkBox">
              <ul class="sangseChk">
                <li>
                  <input type="checkbox" name="gongjang" value="gongjang">
                공장</li>
                <li>
                  <input type="checkbox" name="gongjang" value="gongjang">
                아파트형 공장</li>
                <li>
                  <input type="checkbox" name="gongjang" value="gongjang">
                창고</li>
              </ul>
            </li>
          </ul>
          <ul class="toji">
            <li class="firstChk">
              <input type="checkbox" name="toji" value="toji">
            토지</li>
            <li class="sangseChkBox">
              <ul class="sangseChk">
                <li>
                  <input type="checkbox" name="toji" value="toji">
                대지</li>
                <li>
                  <input type="checkbox" name="toji" value="toji">
                전</li>
                <li>
                  <input type="checkbox" name="toji" value="toji">
                답</li>
                <li>
                  <input type="checkbox" name="toji" value="toji">
                임야</li>
                <li>
                  <input type="checkbox" name="toji" value="toji">
                과수원</li>
                <li>
                  <input type="checkbox" name="toji" value="toji">
                잡종지</li>
                <li>
                  <input type="checkbox" name="toji" value="toji">
                도로</li>
                <li>
                  <input type="checkbox" name="toji" value="toji">
                묘지</li>
                <li>
                  <input type="checkbox" name="toji" value="toji">
                목장용지</li>
                <li>
                  <input type="checkbox" name="toji" value="toji">
                공장용지</li>
                <li>
                  <input type="checkbox" name="toji" value="toji">
                학교용지</li>
                <li>
                  <input type="checkbox" name="toji" value="toji">
                창고용지</li>
                <li>
                  <input type="checkbox" name="toji" value="toji">
                체육용지</li>
                <li>
                  <input type="checkbox" name="toji" value="toji">
                종교용지</li>
                <li>
                  <input type="checkbox" name="toji" value="toji">
                구거</li>
                <li>
                  <input type="checkbox" name="toji" value="toji">
                하천</li>
                <li>
                  <input type="checkbox" name="toji" value="toji">
                유지</li>
                <li>
                  <input type="checkbox" name="toji" value="toji">
                제방</li>
                <li>
                  <input type="checkbox" name="toji" value="toji">
                주차장</li>
                <li>
                  <input type="checkbox" name="toji" value="toji">
                염전</li>
                <li>
                  <input type="checkbox" name="toji" value="toji">
                양어장</li>
              </ul>
            </li>
          </ul>
          <ul class="etc">
            <li class="firstChk">
              <input type="checkbox" name="etc" value="etc" id="etc">
            기타 </li>
            <li class="sangseChkBox">
              <ul class="sangseChk">
                <li>
                  <input type="checkbox" name="toji" value="toji">
                콘도</li>
                <li>
                  <input type="checkbox" name="toji" value="toji">
                골프장</li>
                <li>
                  <input type="checkbox" name="toji" value="toji">
                스키장</li>
                <li>
                  <input type="checkbox" name="toji" value="toji">
                레저시설</li>
                <li>
                  <input type="checkbox" name="toji" value="toji">
                목욕탕</li>
                <li>
                  <input type="checkbox" name="toji" value="toji">
                교육시설</li>
                <li>
                  <input type="checkbox" name="toji" value="toji">
                농가시설</li>
                <li>
                  <input type="checkbox" name="toji" value="toji">
                의료시설</li>
                <li>
                  <input type="checkbox" name="toji" value="toji">
                주유소</li>
                <li>
                  <input type="checkbox" name="toji" value="toji">
                노유자시설</li>
                <li>
                  <input type="checkbox" name="toji" value="toji">
                분뇨시설</li>
                <li>
                  <input type="checkbox" name="toji" value="toji">
                자동차시설</li>
                <li>
                  <input type="checkbox" name="toji" value="toji">
                장례시설</li>
                <li>
                  <input type="checkbox" name="toji" value="toji">
                문화,집회시설</li>
                <li>
                  <input type="checkbox" name="toji" value="toji">
                기타 부동산</li>
              </ul>
            </li>
            <a href="#" class="plusbtn">＋</a>
          </ul>
        </div>
      </div>
      <!-- sojaeBox -->
      <div class="sojaeBox">
        <div class="selBox">
          <ul class="sojaeji">
            <li class="firstChk col-2">
              물건 소재지
            </li>
            <li class="sojaejiCont">
              <ul class="sojaejiBtnBox">
                <li class="on"><a href="#" class="jibunBtn">지번</a></li>
                <li><a href="#" class="doroBtn">도로명</a></li>
                <li><a href="#" class="bubwonBtn">법원</a></li>
              </ul>
              <div id="sojaejiContBox">
                <!-- 지번 -->
                <ul class="sojaejiSelBox on">
                  <li>
                    <select>
                      <option value="sido">시 / 도</option>
                      <option value="seoul">서울</option>
                      <option value="gyeonggi">경기도</option>
                      <option value="busan">부산광역시</option>
                    </select>
                  </li>
                  <li>
                    <select>
                      <option value="gugun">구 / 군</option>
                      <option value="guro">구로구</option>
                      <option value="geumcheon">금천구</option>
                      <option value="gangnam">강남구</option>
                    </select>
                  </li>
                  <li>
                    <input type="text" name="eubmyundong" placeholder="읍 / 면 / 동">
                  </li>
                </ul>
                <!-- 도로명 -->
                <ul class="sojaejiSelBox">
                  <li>
                    <select>
                      <option value="sido">시 / 도</option>
                      <option value="seoul">서울</option>
                      <option value="gyeonggi">경기도</option>
                      <option value="busan">부산광역시</option>
                    </select>
                  </li>
                  <li>
                    <select>
                      <option value="gugun">구 / 군</option>
                      <option value="guro">구로구</option>
                      <option value="geumcheon">금천구</option>
                      <option value="gangnam">강남구</option>
                    </select>
                  </li>
                  <li>
                    <input type="text" name="eubmyundong" placeholder="도로명">
                  </li>
                  <li>
                    <input type="text" name="gunmulnum" placeholder="건물번호">
                  </li>
                </ul>
                <!-- 법원 -->
                <ul class="sojaejiSelBox">
                  <li>
                    <select>
                      <option value="sido">전체 법원</option>
                      <option value="seoul">서울중앙</option>
                      <option value="gyeonggi">서울남부</option>
                      <option value="busan">서울북부</option>
                    </select>
                  </li>
                  <li>
                    <select>
                      <option value="gugun">전체 계</option>
                      <option value="guro">1계</option>
                      <option value="geumcheon">2계</option>
                      <option value="gangnam">3계</option>
                    </select>
                  </li>
                </ul>
              </div>
            </li>
          </ul>
          <ul class="subway">
            <li class="firstChk col-2">
              역세권
            </li>
            <li class="subwayCont">
              <ul class="subwayBtnBox">
                <li><a href="#" class="subway_sudoBtn">수도권</a></li>
                <li><a href="#" class="subway_busanBtn">부산</a></li>
                <li><a href="#" class="subway_gwangjuBtn">광주</a></li>
                <li><a href="#" class="subway_daeguBtn">대구</a></li>
                <li><a href="#" class="subway_daejeonBtn">대전</a></li>
              </ul>
              <ul class="subwayMap">
                <li><img src="/www/CodeIgniter/public/images/subway.png" alt="노선도"></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
      <div class="priceBox">
        <div class="selBox">
          <div class="priceinBox">
            <ul class="gamjeongga">
              <li class="firstChk col-2">감정가</li>
              <li>
                <select>
                  <option value="minGamjeongga">최소 금액</option>
                  <option value="100">100만 원</option>
                  <option value="200">200만 원</option>
                  <option value="300">300만 원</option>
                  <option value="400">400만 원</option>
                  <option value="500">500만 원</option>
                  <option value="1000">1000만 원</option>
                  <option value="2000">2000만 원</option>
                  <option value="3000">3000만 원</option>
                  <option value="4000">4000만 원</option>
                  <option value="5000">5000만 원</option>
                  <option value="10000">1억 원</option>
                  <option value="20000">2억 원</option>
                  <option value="30000">3억 원</option>
                  <option value="40000">4억 원</option>
                  <option value="50000">5억 원</option>
                  <option value="100000">10억 원</option>
                  <option value="200000">20억 원</option>
                  <option value="300000">30억 원</option>
                  <option value="400000">40억 원</option>
                  <option value="500000">50억 원</option>
                  <option value="500000">50억 원 이상</option>
                </select>
              </li>
              <li class="wave">~</li>
              <li>
                <select>
                  <option value="maxGamjeongga">최대 금액</option>
                  <option value="100">100만 원</option>
                  <option value="200">200만 원</option>
                  <option value="300">300만 원</option>
                  <option value="400">400만 원</option>
                  <option value="500">500만 원</option>
                  <option value="1000">1000만 원</option>
                  <option value="2000">2000만 원</option>
                  <option value="3000">3000만 원</option>
                  <option value="4000">4000만 원</option>
                  <option value="5000">5000만 원</option>
                  <option value="10000">1억 원</option>
                  <option value="20000">2억 원</option>
                  <option value="30000">3억 원</option>
                  <option value="40000">4억 원</option>
                  <option value="50000">5억 원</option>
                  <option value="100000">10억 원</option>
                  <option value="200000">20억 원</option>
                  <option value="300000">30억 원</option>
                  <option value="400000">40억 원</option>
                  <option value="500000">50억 원</option>
                  <option value="500000">50억 원 이상</option>
                </select>
              </li>
            </ul>
            <ul class="minPrice">
              <li class="firstChk col-2">최저가</li>
              <li>
                <select>
                  <option value="minGamjeongga">최소 금액</option>
                  <option value="100">100만 원</option>
                  <option value="200">200만 원</option>
                  <option value="300">300만 원</option>
                  <option value="400">400만 원</option>
                  <option value="500">500만 원</option>
                  <option value="1000">1000만 원</option>
                  <option value="2000">2000만 원</option>
                  <option value="3000">3000만 원</option>
                  <option value="4000">4000만 원</option>
                  <option value="5000">5000만 원</option>
                  <option value="10000">1억 원</option>
                  <option value="20000">2억 원</option>
                  <option value="30000">3억 원</option>
                  <option value="40000">4억 원</option>
                  <option value="50000">5억 원</option>
                  <option value="100000">10억 원</option>
                  <option value="200000">20억 원</option>
                  <option value="300000">30억 원</option>
                  <option value="400000">40억 원</option>
                  <option value="500000">50억 원</option>
                  <option value="500000">50억 원 이상</option>
                </select>
              </li>
              <li class="wave">~</li>
              <li>
                <select>
                  <option value="maxGamjeongga">최대 금액</option>
                  <option value="100">100만 원</option>
                  <option value="200">200만 원</option>
                  <option value="300">300만 원</option>
                  <option value="400">400만 원</option>
                  <option value="500">500만 원</option>
                  <option value="1000">1000만 원</option>
                  <option value="2000">2000만 원</option>
                  <option value="3000">3000만 원</option>
                  <option value="4000">4000만 원</option>
                  <option value="5000">5000만 원</option>
                  <option value="10000">1억 원</option>
                  <option value="20000">2억 원</option>
                  <option value="30000">3억 원</option>
                  <option value="40000">4억 원</option>
                  <option value="50000">5억 원</option>
                  <option value="100000">10억 원</option>
                  <option value="200000">20억 원</option>
                  <option value="300000">30억 원</option>
                  <option value="400000">40억 원</option>
                  <option value="500000">50억 원</option>
                  <option value="500000">50억 원 이상</option>
                </select>
              </li>
            </ul>
          </div>
          <div class="priceinBox area">
            <ul class="area-field">
              <li class="firstChk col-2">대지면적</li>
              <li>
                <label class="switch-light switch-candy" onclick="">
                  <input type="checkbox">
                  <span>
                    <span>㎡</span>
                    <span>평</span>
                    <a></a>
                  </span>
                </label>
              </li>
              <li class="area-resetBtn">조건 초기화</li>
              <li class="area-updown">단위 ↓</li>
            </ul>
            <ul class="area-field arc-field">
              <li class="firstChk col-2">건물면적</li>
              <li>
                <label class="switch-light switch-candy" onclick="">
                  <input type="checkbox">
                  <span>
                    <span>㎡</span>
                    <span>평</span>
                    <a></a>
                  </span>
                </label>
              </li>
              <li class="area-resetBtn">조건 초기화</li>
              <li class="area-updown">단위 ↓</li>
            </ul>
            <ul class="field-slider">
              <li class="col-2 firstChk"></li>
              <li class="sliderBox">
                <!-- Slider -->
                <div class="pips-slider"></div>
              </li>
            </ul>
            <ul class="field-slider fs-right">
              <li class="col-2 firstChk"></li>
              <li class="sliderBox">
                <!-- Slider -->
                <div class="pips-slider"></div>
              </li>
            </ul>
            <ul class="field-slider">
              <li class="col-2 firstChk"></li>
              <li>
                <div class="wan-spinner input-PM">
                  <a href="javascript:void(0)" class="minus">-</a>
                  <input type="text" value="1">
                  <a href="javascript:void(0)" class="plus">+</a>
                </div>
              </li>
              <li class="wave">
                ~
              </li>
              <li>
                <div class="wan-spinner input-PM">
                  <a href="javascript:void(0)" class="minus">-</a>
                  <input type="text" value="1000">
                  <a href="javascript:void(0)" class="plus">+</a>
                </div>
              </li>
            </ul>
            <ul class="field-slider fs-right" style="right: -5px;">
              <li class="col-2 firstChk"></li>
              <li>
                <div class="wan-spinner input-PM">
                  <a href="javascript:void(0)" class="minus">-</a>
                  <input type="text" value="1">
                  <a href="javascript:void(0)" class="plus">+</a>
                </div>
              </li>
              <li class="wave">
                ~
              </li>
              <li>
                <div class="wan-spinner input-PM">
                  <a href="javascript:void(0)" class="minus">-</a>
                  <input type="text" value="1000">
                  <a href="javascript:void(0)" class="plus">+</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="sagunBox">
        <div class="selBox">
          <div class="sagun-radioBox">
            <div class="sagun-rB-left">
              <span class="firstChk col-4">사건현황</span>
              <div class="col-8">
                <input type="radio" id="ing" name="ing"><label for="ing">진행사건 전체</label>
                <input type="radio" id="new" name="new"><label for="new">신건</label>
                <input type="radio" id="old" name="old"><label for="old" class="last-radio">유찰</label>
              </div><br>
              <div class="ingx">
                <input type="radio" id="and" name="and" class="first-radioBtn"><label for="and">진행 외 사건</label>
                <select>
                  <option value="1">진행 외 사건전체</option>
                  <option value="2">매각/매각허가</option>
                  <option value="3">잔금납부</option>
                  <option value="4">배당기일/종결</option>
                  <option value="4">변경/연기</option>
                  <option value="4">불허가/허가취소</option>
                  <option value="4">정지</option>
                  <option value="4">각하</option>
                  <option value="4">기각</option>
                  <option value="4">기타</option>
                  <option value="4">이송</option>
                  <option value="4">취소</option>
                  <option value="4">취하</option>
                </select>
              </div>

            </div>
            <div class="sagun-rB-right">
              <span class="firstChk col-4">경매구분</span>
              <input type="radio" id="ing" name="ing"><label for="ing">전체선택</label>
              <input type="radio" id="new" name="new"><label for="new">임의경매</label>
              <input type="radio" id="old" name="old"><label for="old" class="last-radio">강제경매</label>
            </div>
          </div>
        </div>
        <div class="priceinBox area">
          <ul class="area-field">
            <li class="firstChk col-2">유찰횟수</li>
            <li class="area-resetBtn">조건 초기화</li>
          </ul>
          <ul class="area-field arc-field">
            <li class="firstChk col-2">감정가 대비 할인율</li>
            <li class="area-resetBtn">조건 초기화</li>
          </ul>
          <ul class="field-slider">
            <li class="col-2 firstChk"></li>
            <li class="sliderBox">
              <!-- Slider -->
              <div class="pips-slider"></div>
            </li>
          </ul>
          <ul class="field-slider fs-right">
            <li class="col-2 firstChk"></li>
            <li class="sliderBox">
              <!-- Slider -->
              <div class="pips-slider"></div>
            </li>
          </ul>
          <ul class="field-slider">
            <li class="col-2 firstChk"></li>
            <li>
              <div class="wan-spinner input-PM">
                <a href="javascript:void(0)" class="minus">-</a>
                <input type="text" value="1">
                <a href="javascript:void(0)" class="plus">+</a>
              </div>
            </li>
            <li class="wave">
              ~
            </li>
            <li>
              <div class="wan-spinner input-PM">
                <a href="javascript:void(0)" class="minus">-</a>
                <input type="text" value="1000">
                <a href="javascript:void(0)" class="plus">+</a>
              </div>
            </li>
          </ul>
          <ul class="field-slider fs-right" style="right: -5px;">
            <li class="col-2 firstChk"></li>
            <li>
              <div class="wan-spinner input-PM">
                <a href="javascript:void(0)" class="minus">-</a>
                <input type="text" value="1">
                <a href="javascript:void(0)" class="plus">+</a>
              </div>
            </li>
            <li class="wave">
              ~
            </li>
            <li>
              <div class="wan-spinner input-PM">
                <a href="javascript:void(0)" class="minus">-</a>
                <input type="text" value="1000">
                <a href="javascript:void(0)" class="plus">+</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <div class="specialBox">
        <div class="selBox">
          <ul class="special-allChk">
            <li class="firstChk">
            </li>
            <li class="sangseChkBox">
              <ul class="sangseChk specialChk">
                <li>
                  <input type="checkbox" name="jugeo" value="jugeo">
                  <span>전체선택</span>
                </li>
                <li>
                  <input type="checkbox" name="jugeo" value="jugeo">
                  <span>체크항목 제외</span>
                </li>
              </ul>
            </li>
          </ul>
          <ul class="special-selChk">
            <li class="firstChk">특수권리 / 물건</li>
            <li class="sangseChkBox">
              <ul class="sangseChk specialChk">
                <li>
                  <input type="checkbox" name="sangup" value="sangup">
                대항력 있는 임차인</li>
                <li>
                  <input type="checkbox" name="sangup" value="sangup">
                전세권설정 / 임차권등기</li>
                <li>
                  <input type="checkbox" name="sangup" value="sangup">
                임차인 없는 물건</li>
                <li>
                  <input type="checkbox" name="sangup" value="sangup">
                유치권</li>
                <li>
                  <input type="checkbox" name="sangup" value="sangup">
                법정지상권</li>
                <li>
                  <input type="checkbox" name="sangup" value="sangup">
                분묘기지권</li>
                <li>
                  <input type="checkbox" name="sangup" value="sangup">
                가처분</li>
                <li>
                  <input type="checkbox" name="sangup" value="sangup">
                가등기</li>
                <li>
                  <input type="checkbox" name="sangup" value="sangup">
                대지권 미등기</li>
                <li>
                  <input type="checkbox" name="sangup" value="sangup">
                토지별도등기</li>
                <li>
                  <input type="checkbox" name="sangup" value="sangup">
                예고 등기</li>
                <li>
                  <input type="checkbox" name="sangup" value="sangup">
                지분매각</li>
                <li>
                  <input type="checkbox" name="sangup" value="sangup">
                건물만 매각</li>
                <li>
                  <input type="checkbox" name="sangup" value="sangup">
                토지만 매각</li>
                <li>
                  <input type="checkbox" name="sangup" value="sangup">
                형식적 경매</li>
                <li>
                  <input type="checkbox" name="sangup" value="sangup">
                재매각</li>
                <li>
                  <input type="checkbox" name="sangup" value="sangup">
                병합 / 중복사건</li>
              </ul>
            </li>
          </ul>
          </div>
        </div>
      </div>

      <div class="selChkBox">
        <div>
          <ul>
            <li><a href="#">주거시설 전체</a></li>
            <li><a href="#">가격 ~2억 이하</a></li>
            <li><a href="#">서울지역</a></li>
            <li><a href="#">현황 진행 중</a></li>
            <li><a href="#">유치권</a></li>
            <li><a href="#">토지 주차장</a></li>
            <li><a href="#">유찰2회 이상</a></li>
            <li><a href="#">경기 광명시</a></li>
            <li><a href="#">대항력 있는 임차인</a></li>
          </ul>
        </div>
      </div>
      <div class="btnBox">
        <div>
          <a href="#" class="searchResetBtn">조건 초기화</a>
          <input type="submit" value="검색하기" id="botSearchBtn">
        </div>
      </div>
    </div>
    <a href="#" class="sangseView">상세보기</a>
  </section>
