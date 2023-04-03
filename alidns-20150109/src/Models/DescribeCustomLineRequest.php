<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class DescribeCustomLineRequest extends Model
{
    /**
     * @description The language type.
     *
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @description The unique ID of the custom line.
     *
     * @example 597
     *
     * @var int
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
     * @return DescribeCustomLineRequest
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
