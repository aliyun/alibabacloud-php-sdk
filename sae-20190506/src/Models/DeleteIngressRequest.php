<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class DeleteIngressRequest extends Model
{
    /**
     * @description The ID of the routing rule that you want to delete. You can call the [ListIngresses](https://help.aliyun.com/document_detail/153934.html) operation to obtain the ID of a routing rule.
     *
     * This parameter is required.
     *
     * @example 87
     *
     * @var int
     */
    public $ingressId;
    protected $_name = [
        'ingressId' => 'IngressId',
    ];

    public function validate() {}

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
     * @return DeleteIngressRequest
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
