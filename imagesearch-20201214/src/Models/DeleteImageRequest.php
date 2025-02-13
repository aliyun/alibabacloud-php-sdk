<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20201214\Models;

use AlibabaCloud\Dara\Model;

class DeleteImageRequest extends Model
{
    /**
     * @var string
     */
    public $filter;
    /**
     * @var string
     */
    public $instanceName;
    /**
     * @var bool
     */
    public $isDeleteByFilter;
    /**
     * @var string
     */
    public $picName;
    /**
     * @var string
     */
    public $productId;
    protected $_name = [
        'filter'           => 'Filter',
        'instanceName'     => 'InstanceName',
        'isDeleteByFilter' => 'IsDeleteByFilter',
        'picName'          => 'PicName',
        'productId'        => 'ProductId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->filter) {
            $res['Filter'] = $this->filter;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->isDeleteByFilter) {
            $res['IsDeleteByFilter'] = $this->isDeleteByFilter;
        }

        if (null !== $this->picName) {
            $res['PicName'] = $this->picName;
        }

        if (null !== $this->productId) {
            $res['ProductId'] = $this->productId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Filter'])) {
            $model->filter = $map['Filter'];
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['IsDeleteByFilter'])) {
            $model->isDeleteByFilter = $map['IsDeleteByFilter'];
        }

        if (isset($map['PicName'])) {
            $model->picName = $map['PicName'];
        }

        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }

        return $model;
    }
}
