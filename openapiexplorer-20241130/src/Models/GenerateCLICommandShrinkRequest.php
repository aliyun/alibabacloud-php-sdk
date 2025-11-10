<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenAPIExplorer\V20241130\Models;

use AlibabaCloud\Dara\Model;

class GenerateCLICommandShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $api;

    /**
     * @var string
     */
    public $apiParamsShrink;

    /**
     * @var string
     */
    public $apiVersion;

    /**
     * @var string
     */
    public $product;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'api' => 'api',
        'apiParamsShrink' => 'apiParams',
        'apiVersion' => 'apiVersion',
        'product' => 'product',
        'regionId' => 'regionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->api) {
            $res['api'] = $this->api;
        }

        if (null !== $this->apiParamsShrink) {
            $res['apiParams'] = $this->apiParamsShrink;
        }

        if (null !== $this->apiVersion) {
            $res['apiVersion'] = $this->apiVersion;
        }

        if (null !== $this->product) {
            $res['product'] = $this->product;
        }

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
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
        if (isset($map['api'])) {
            $model->api = $map['api'];
        }

        if (isset($map['apiParams'])) {
            $model->apiParamsShrink = $map['apiParams'];
        }

        if (isset($map['apiVersion'])) {
            $model->apiVersion = $map['apiVersion'];
        }

        if (isset($map['product'])) {
            $model->product = $map['product'];
        }

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        return $model;
    }
}
