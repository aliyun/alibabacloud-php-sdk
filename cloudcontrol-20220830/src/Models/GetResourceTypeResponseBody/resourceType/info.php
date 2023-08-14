<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudcontrol\V20220830\Models\GetResourceTypeResponseBody\resourceType;

use AlibabaCloud\Tea\Model;

class info extends Model
{
    /**
     * @example paid
     *
     * @var string
     */
    public $chargeType;

    /**
     * @example region
     *
     * @var string
     */
    public $deliveryScope;

    /**
     * @example An ECS instance is equivalent to a virtual machine, including the most basic computing components such as CPU, memory, operating system, network, and disk. You can easily customize and change the configuration of the instance. You have full control over the virtual machine.
     *
     * @var string
     */
    public $description;

    /**
     * @example Instance
     *
     * @var string
     */
    public $title;
    protected $_name = [
        'chargeType'    => 'chargeType',
        'deliveryScope' => 'deliveryScope',
        'description'   => 'description',
        'title'         => 'title',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return info
     */
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
