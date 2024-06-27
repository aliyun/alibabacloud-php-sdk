<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Tea\Model;

class DescribeCustVariableConfigListRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $bizType;

    /**
     * @var string
     */
    public $regId;

    /**
     * @var string
     */
    public $timeType;
    protected $_name = [
        'lang'     => 'Lang',
        'bizType'  => 'bizType',
        'regId'    => 'regId',
        'timeType' => 'timeType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->bizType) {
            $res['bizType'] = $this->bizType;
        }
        if (null !== $this->regId) {
            $res['regId'] = $this->regId;
        }
        if (null !== $this->timeType) {
            $res['timeType'] = $this->timeType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCustVariableConfigListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['bizType'])) {
            $model->bizType = $map['bizType'];
        }
        if (isset($map['regId'])) {
            $model->regId = $map['regId'];
        }
        if (isset($map['timeType'])) {
            $model->timeType = $map['timeType'];
        }

        return $model;
    }
}
