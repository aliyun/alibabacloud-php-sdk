<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models;

use AlibabaCloud\Tea\Model;

class RecognizeInternationalBusinessLicenseResponseBody extends Model
{
    /**
     * @example unmatchedImageType
     *
     * @var string
     */
    public $code;

    /**
     * @example {"algo_version": "b16f86189b72c2d726865272c98e8e58156a41c7;b16f86189b72c2d726865272c98e8e58156a41c7", "data": {"certificateType": "간이과세자", "issuanceNo": "", "processingTime": "", "companyNameEn": "", "companyName": "", "registrationNo": "135-31-78773", "nameOfRepresentativeEn": "", "nameOfRepresentative": "테라", "residentRegistrationNo": "", "businessAddressEn": "", "businessAddress": "경기도 수원시 영통구 영통로 498, 143동 1806흐(영통동, 황골마을 주공아파트)", "businessCommencementDate": "1972-01-10", "businessRegistrationDate": "", "businessTypeEn": "", "businessType": "", "businessItemEn": "", "businessItem": "스매업 전자상거래업(의류)", "jointCompanyName": "", "jointCompanyRegistrationNo": "", "issueDate": "2015-10-28", "issuer": "동수원세무서장"}, "ftype": 0, "height": 2988, "orgHeight": 2988, "orgWidth": 5312, "prism_keyValueInfo": [{"key": "certificateType", "keyProb": 100, "value": "간이과세자", "valuePos": [{"x": 621, "y": 1768}, {"x": 615, "y": 1221}, {"x": 720, "y": 1220}, {"x": 726, "y": 1767}], "valueProb": 100}, {"key": "issuanceNo", "keyProb": 100, "value": "", "valueProb": 100}, {"key": "processingTime", "keyProb": 100, "value": "", "valueProb": 100}, {"key": "companyNameEn", "keyProb": 100, "value": "", "valueProb": 100}, {"key": "companyName", "keyProb": 100, "value": "", "valueProb": 100}, {"key": "registrationNo", "keyProb": 100, "value": "135-31-78773", "valuePos": [{"x": 773, "y": 1517}, {"x": 763, "y": 881}, {"x": 861, "y": 880}, {"x": 870, "y": 1515}], "valueProb": 100}, {"key": "nameOfRepresentativeEn", "keyProb": 100, "value": "", "valueProb": 100}, {"key": "nameOfRepresentative", "keyProb": 90, "value": "테라", "valuePos": [{"x": 946, "y": 2201}, {"x": 946, "y": 2047}, {"x": 1022, "y": 2047}, {"x": 1022, "y": 2201}], "valueProb": 90}, {"key": "residentRegistrationNo", "keyProb": 100, "value": "", "valueProb": 100}, {"key": "businessAddressEn", "keyProb": 100, "value": "", "valueProb": 100}, {"key": "businessAddress", "keyProb": 96, "value": "경기도 수원시 영통구 영통로 498, 143동 1806흐(영통동, 황골마을 주공아파트)", "valuePos": [{"x": 1346, "y": 2200}, {"x": 1321, "y": 736}, {"x": 1499, "y": 733}, {"x": 1523, "y": 2197}], "valueProb": 96}, {"key": "businessCommencementDate", "keyProb": 100, "value": "1972-01-10", "valuePos": [{"x": 1055, "y": 788}, {"x": 1046, "y": 62}, {"x": 1127, "y": 62}, {"x": 1135, "y": 787}], "valueProb": 100}, {"key": "businessRegistrationDate", "keyProb": 100, "value": "", "valueProb": 100}, {"key": "businessTypeEn", "keyProb": 100, "value": "", "valueProb": 100}, {"key": "businessType", "keyProb": 100, "value": "", "valueProb": 100}, {"key": "businessItemEn", "keyProb": 100, "value": "", "valueProb": 100}, {"key": "businessItem", "keyProb": 100, "value": "스매업 전자상거래업(의류)", "valuePos": [{"x": 1590, "y": 1982}, {"x": 1561, "y": 293}, {"x": 1659, "y": 291}, {"x": 1688, "y": 1980}], "valueProb": 100}, {"key": "jointCompanyName", "keyProb": 100, "value": "", "valueProb": 100}, {"key": "jointCompanyRegistrationNo", "keyProb": 100, "value": "", "valueProb": 100}, {"key": "issueDate", "keyProb": 100, "value": "2015-10-28", "valuePos": [{"x": 3755, "y": 1938}, {"x": 3749, "y": 1057}, {"x": 3842, "y": 1056}, {"x": 3848, "y": 1937}], "valueProb": 100}, {"key": "issuer", "keyProb": 100, "value": "동수원세무서장", "valuePos": [{"x": 3978, "y": 1997}, {"x": 3970, "y": 982}, {"x": 4099, "y": 980}, {"x": 4107, "y": 1996}], "valueProb": 100}], "sliceRect": {"x0": 8, "y0": 0, "x1": 4695, "y1": 0, "x2": 4737, "y2": 2976, "x3": 12, "y3": 2988}, "width": 5312}
     *
     * @var string
     */
    public $data;

    /**
     * @example The type of image didn\"t match the api.
     *
     * @var string
     */
    public $message;

    /**
     * @example 43A29C77-405E-4CC0-BC55-EE694AD00655
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code'      => 'Code',
        'data'      => 'Data',
        'message'   => 'Message',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RecognizeInternationalBusinessLicenseResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
