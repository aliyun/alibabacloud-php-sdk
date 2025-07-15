<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\CheckResultResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example **
     *
     * @var string
     */
    public $ekycResult;

    /**
     * @example **
     *
     * @var string
     */
    public $extBasicInfo;

    /**
     * @example **
     *
     * @var string
     */
    public $extFaceInfo;

    /**
     * @example **
     *
     * @var string
     */
    public $extIdInfo;

    /**
     * @var string
     */
    public $extInfo;

    /**
     * @example **
     *
     * @var string
     */
    public $extRiskInfo;

    /**
     * @example Y
     *
     * @var string
     */
    public $passed;

    /**
     * @example ***
     *
     * @var string
     */
    public $subCode;
    protected $_name = [
        'ekycResult' => 'EkycResult',
        'extBasicInfo' => 'ExtBasicInfo',
        'extFaceInfo' => 'ExtFaceInfo',
        'extIdInfo' => 'ExtIdInfo',
        'extInfo' => 'ExtInfo',
        'extRiskInfo' => 'ExtRiskInfo',
        'passed' => 'Passed',
        'subCode' => 'SubCode',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->ekycResult) {
            $res['EkycResult'] = $this->ekycResult;
        }
        if (null !== $this->extBasicInfo) {
            $res['ExtBasicInfo'] = $this->extBasicInfo;
        }
        if (null !== $this->extFaceInfo) {
            $res['ExtFaceInfo'] = $this->extFaceInfo;
        }
        if (null !== $this->extIdInfo) {
            $res['ExtIdInfo'] = $this->extIdInfo;
        }
        if (null !== $this->extInfo) {
            $res['ExtInfo'] = $this->extInfo;
        }
        if (null !== $this->extRiskInfo) {
            $res['ExtRiskInfo'] = $this->extRiskInfo;
        }
        if (null !== $this->passed) {
            $res['Passed'] = $this->passed;
        }
        if (null !== $this->subCode) {
            $res['SubCode'] = $this->subCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EkycResult'])) {
            $model->ekycResult = $map['EkycResult'];
        }
        if (isset($map['ExtBasicInfo'])) {
            $model->extBasicInfo = $map['ExtBasicInfo'];
        }
        if (isset($map['ExtFaceInfo'])) {
            $model->extFaceInfo = $map['ExtFaceInfo'];
        }
        if (isset($map['ExtIdInfo'])) {
            $model->extIdInfo = $map['ExtIdInfo'];
        }
        if (isset($map['ExtInfo'])) {
            $model->extInfo = $map['ExtInfo'];
        }
        if (isset($map['ExtRiskInfo'])) {
            $model->extRiskInfo = $map['ExtRiskInfo'];
        }
        if (isset($map['Passed'])) {
            $model->passed = $map['Passed'];
        }
        if (isset($map['SubCode'])) {
            $model->subCode = $map['SubCode'];
        }

        return $model;
    }
}
