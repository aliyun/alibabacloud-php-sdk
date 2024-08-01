<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models;

use AlibabaCloud\Tea\Model;

class DescribeCustomLineInfoRequest extends Model
{
    /**
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @description This parameter is required.
     *
     * @example 11271
     *
     * @var string
     */
    public $lineId;
    protected $_name = [
        'lang'   => 'Lang',
        'lineId' => 'LineId',
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
        if (null !== $this->lineId) {
            $res['LineId'] = $this->lineId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCustomLineInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['LineId'])) {
            $model->lineId = $map['LineId'];
        }

        return $model;
    }
}
