<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\CreateIngressResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
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
     * @return data
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
