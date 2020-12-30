<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pcdn\V20170411\Models;

use AlibabaCloud\Tea\Model;

class GetCurrentModeResponseBody extends Model
{
    /**
     * @var int
     */
    public $modeCode;

    /**
     * @var string
     */
    public $requestId;

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

    /**
     * @var int
     */
    public $code;
    protected $_name = [
        'modeCode'          => 'ModeCode',
        'requestId'         => 'RequestId',
        'paddingModeCode'   => 'PaddingModeCode',
        'effectiveAt'       => 'EffectiveAt',
        'estimateBandwidth' => 'EstimateBandwidth',
        'code'              => 'Code',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->modeCode) {
            $res['ModeCode'] = $this->modeCode;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCurrentModeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ModeCode'])) {
            $model->modeCode = $map['ModeCode'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        return $model;
    }
}
