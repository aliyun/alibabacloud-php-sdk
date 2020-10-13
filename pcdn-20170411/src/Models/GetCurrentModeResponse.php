<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pcdn\V20170411\Models;

use AlibabaCloud\Tea\Model;

class GetCurrentModeResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $code;

    /**
     * @var int
     */
    public $modeCode;

    /**
     * @var int
     */
    public $paddingModeCode;

    /**
     * @var int
     */
    public $effectiveAt;

    /**
     * @var int
     */
    public $estimateBandwidth;
    protected $_name = [
        'requestId'         => 'RequestId',
        'code'              => 'Code',
        'modeCode'          => 'ModeCode',
        'paddingModeCode'   => 'PaddingModeCode',
        'effectiveAt'       => 'EffectiveAt',
        'estimateBandwidth' => 'EstimateBandwidth',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('code', $this->code, true);
        Model::validateRequired('modeCode', $this->modeCode, true);
        Model::validateRequired('paddingModeCode', $this->paddingModeCode, true);
        Model::validateRequired('effectiveAt', $this->effectiveAt, true);
        Model::validateRequired('estimateBandwidth', $this->estimateBandwidth, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->modeCode) {
            $res['ModeCode'] = $this->modeCode;
        }
        if (null !== $this->paddingModeCode) {
            $res['PaddingModeCode'] = $this->paddingModeCode;
        }
        if (null !== $this->effectiveAt) {
            $res['EffectiveAt'] = $this->effectiveAt;
        }
        if (null !== $this->estimateBandwidth) {
            $res['EstimateBandwidth'] = $this->estimateBandwidth;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCurrentModeResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['ModeCode'])) {
            $model->modeCode = $map['ModeCode'];
        }
        if (isset($map['PaddingModeCode'])) {
            $model->paddingModeCode = $map['PaddingModeCode'];
        }
        if (isset($map['EffectiveAt'])) {
            $model->effectiveAt = $map['EffectiveAt'];
        }
        if (isset($map['EstimateBandwidth'])) {
            $model->estimateBandwidth = $map['EstimateBandwidth'];
        }

        return $model;
    }
}
