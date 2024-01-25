<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiops\V20200806\Models;

use AlibabaCloud\Tea\Model;

class PutGroupResourceTagRequest extends Model
{
    /**
     * @var string
     */
    public $businessGroupId;

    /**
     * @var string
     */
    public $operaUid;

    /**
     * @var string
     */
    public $productId;

    /**
     * @var string
     */
    public $resources;

    /**
     * @var string
     */
    public $tagId;
    protected $_name = [
        'businessGroupId' => 'BusinessGroupId',
        'operaUid'        => 'OperaUid',
        'productId'       => 'ProductId',
        'resources'       => 'Resources',
        'tagId'           => 'TagId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->businessGroupId) {
            $res['BusinessGroupId'] = $this->businessGroupId;
        }
        if (null !== $this->operaUid) {
            $res['OperaUid'] = $this->operaUid;
        }
        if (null !== $this->productId) {
            $res['ProductId'] = $this->productId;
        }
        if (null !== $this->resources) {
            $res['Resources'] = $this->resources;
        }
        if (null !== $this->tagId) {
            $res['TagId'] = $this->tagId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PutGroupResourceTagRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BusinessGroupId'])) {
            $model->businessGroupId = $map['BusinessGroupId'];
        }
        if (isset($map['OperaUid'])) {
            $model->operaUid = $map['OperaUid'];
        }
        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }
        if (isset($map['Resources'])) {
            $model->resources = $map['Resources'];
        }
        if (isset($map['TagId'])) {
            $model->tagId = $map['TagId'];
        }

        return $model;
    }
}
