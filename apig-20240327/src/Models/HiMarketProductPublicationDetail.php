<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;

class HiMarketProductPublicationDetail extends Model
{
    /**
     * @var string
     */
    public $portalId;

    /**
     * @var string
     */
    public $portalName;

    /**
     * @var string
     */
    public $productId;

    /**
     * @var string
     */
    public $productName;

    /**
     * @var string
     */
    public $productType;

    /**
     * @var string
     */
    public $publicationId;
    protected $_name = [
        'portalId' => 'portalId',
        'portalName' => 'portalName',
        'productId' => 'productId',
        'productName' => 'productName',
        'productType' => 'productType',
        'publicationId' => 'publicationId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->portalId) {
            $res['portalId'] = $this->portalId;
        }

        if (null !== $this->portalName) {
            $res['portalName'] = $this->portalName;
        }

        if (null !== $this->productId) {
            $res['productId'] = $this->productId;
        }

        if (null !== $this->productName) {
            $res['productName'] = $this->productName;
        }

        if (null !== $this->productType) {
            $res['productType'] = $this->productType;
        }

        if (null !== $this->publicationId) {
            $res['publicationId'] = $this->publicationId;
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
        if (isset($map['portalId'])) {
            $model->portalId = $map['portalId'];
        }

        if (isset($map['portalName'])) {
            $model->portalName = $map['portalName'];
        }

        if (isset($map['productId'])) {
            $model->productId = $map['productId'];
        }

        if (isset($map['productName'])) {
            $model->productName = $map['productName'];
        }

        if (isset($map['productType'])) {
            $model->productType = $map['productType'];
        }

        if (isset($map['publicationId'])) {
            $model->publicationId = $map['publicationId'];
        }

        return $model;
    }
}
