<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudcontrol\V20220830\Models\ListResourceTypesResponseBody\resourceTypes;

use AlibabaCloud\Dara\Model;

class info extends Model
{
    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var string
     */
    public $deliveryScope;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'chargeType' => 'chargeType',
        'deliveryScope' => 'deliveryScope',
        'description' => 'description',
        'title' => 'title',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chargeType) {
            $res['chargeType'] = $this->chargeType;
        }

        if (null !== $this->deliveryScope) {
            $res['deliveryScope'] = $this->deliveryScope;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->title) {
            $res['title'] = $this->title;
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
        if (isset($map['chargeType'])) {
            $model->chargeType = $map['chargeType'];
        }

        if (isset($map['deliveryScope'])) {
            $model->deliveryScope = $map['deliveryScope'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        return $model;
    }
}
