<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alicloudproc\V20240104\Models;

use AlibabaCloud\Tea\Model;

class SubjectExtendInfo extends Model
{
    /**
     * @example 交货期我方计划为准XXX
     *
     * @var string
     */
    public $deliveryDesc;

    /**
     * @example XXX标准XXX要求
     *
     * @var string
     */
    public $desc;
    protected $_name = [
        'deliveryDesc' => 'deliveryDesc',
        'desc'         => 'desc',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deliveryDesc) {
            $res['deliveryDesc'] = $this->deliveryDesc;
        }
        if (null !== $this->desc) {
            $res['desc'] = $this->desc;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubjectExtendInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['deliveryDesc'])) {
            $model->deliveryDesc = $map['deliveryDesc'];
        }
        if (isset($map['desc'])) {
            $model->desc = $map['desc'];
        }

        return $model;
    }
}
