<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetLogMaskConfigsResponseBody;

use AlibabaCloud\Tea\Model;

class configs extends Model
{
    /**
     * @var string
     */
    public $maskDescription;

    /**
     * @var int
     */
    public $maskState;

    /**
     * @var string
     */
    public $maskName;

    /**
     * @var string
     */
    public $maskRegex;

    /**
     * @var string
     */
    public $maskTxt;

    /**
     * @var int
     */
    public $maskId;

    /**
     * @var int
     */
    public $maskType;
    protected $_name = [
        'maskDescription' => 'MaskDescription',
        'maskState'       => 'MaskState',
        'maskName'        => 'MaskName',
        'maskRegex'       => 'MaskRegex',
        'maskTxt'         => 'MaskTxt',
        'maskId'          => 'MaskId',
        'maskType'        => 'MaskType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maskDescription) {
            $res['MaskDescription'] = $this->maskDescription;
        }
        if (null !== $this->maskState) {
            $res['MaskState'] = $this->maskState;
        }
        if (null !== $this->maskName) {
            $res['MaskName'] = $this->maskName;
        }
        if (null !== $this->maskRegex) {
            $res['MaskRegex'] = $this->maskRegex;
        }
        if (null !== $this->maskTxt) {
            $res['MaskTxt'] = $this->maskTxt;
        }
        if (null !== $this->maskId) {
            $res['MaskId'] = $this->maskId;
        }
        if (null !== $this->maskType) {
            $res['MaskType'] = $this->maskType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return configs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaskDescription'])) {
            $model->maskDescription = $map['MaskDescription'];
        }
        if (isset($map['MaskState'])) {
            $model->maskState = $map['MaskState'];
        }
        if (isset($map['MaskName'])) {
            $model->maskName = $map['MaskName'];
        }
        if (isset($map['MaskRegex'])) {
            $model->maskRegex = $map['MaskRegex'];
        }
        if (isset($map['MaskTxt'])) {
            $model->maskTxt = $map['MaskTxt'];
        }
        if (isset($map['MaskId'])) {
            $model->maskId = $map['MaskId'];
        }
        if (isset($map['MaskType'])) {
            $model->maskType = $map['MaskType'];
        }

        return $model;
    }
}
