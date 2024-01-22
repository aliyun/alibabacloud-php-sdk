<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class DescribeIngressRequest extends Model
{
    /**
     * @description The returned data.
     *
     * @example 87
     *
     * @var int
     */
    public $ingressId;
    protected $_name = [
        'ingressId' => 'IngressId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ingressId) {
            $res['IngressId'] = $this->ingressId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeIngressRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IngressId'])) {
            $model->ingressId = $map['IngressId'];
        }

        return $model;
    }
}
