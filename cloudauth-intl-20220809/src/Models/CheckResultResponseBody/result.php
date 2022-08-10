<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\CheckResultResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $ekycResult;

    /**
     * @var string
     */
    public $extBasicInfo;

    /**
     * @var string
     */
    public $extFaceInfo;

    /**
     * @var string
     */
    public $extIdInfo;

    /**
     * @var string
     */
    public $extRiskInfo;
    protected $_name = [
        'ekycResult'   => 'EkycResult',
        'extBasicInfo' => 'ExtBasicInfo',
        'extFaceInfo'  => 'ExtFaceInfo',
        'extIdInfo'    => 'ExtIdInfo',
        'extRiskInfo'  => 'ExtRiskInfo',
    ];

    public function validate()
    {
    }

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
        if (null !== $this->extRiskInfo) {
            $res['ExtRiskInfo'] = $this->extRiskInfo;
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
        if (isset($map['ExtRiskInfo'])) {
            $model->extRiskInfo = $map['ExtRiskInfo'];
        }

        return $model;
    }
}
