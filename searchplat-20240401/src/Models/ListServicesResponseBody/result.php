<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240401\Models\ListServicesResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var string[]
     */
    public $chargeWay;

    /**
     * @var string
     */
    public $description;

    /**
     * @var mixed[]
     */
    public $meta;

    /**
     * @var string
     */
    public $modelType;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $serviceId;

    /**
     * @var string
     */
    public $serviceType;
    protected $_name = [
        'chargeWay' => 'chargeWay',
        'description' => 'description',
        'meta' => 'meta',
        'modelType' => 'modelType',
        'name' => 'name',
        'serviceId' => 'serviceId',
        'serviceType' => 'serviceType',
    ];

    public function validate()
    {
        if (\is_array($this->chargeWay)) {
            Model::validateArray($this->chargeWay);
        }
        if (\is_array($this->meta)) {
            Model::validateArray($this->meta);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chargeWay) {
            if (\is_array($this->chargeWay)) {
                $res['chargeWay'] = [];
                $n1 = 0;
                foreach ($this->chargeWay as $item1) {
                    $res['chargeWay'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->meta) {
            if (\is_array($this->meta)) {
                $res['meta'] = [];
                foreach ($this->meta as $key1 => $value1) {
                    $res['meta'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->modelType) {
            $res['modelType'] = $this->modelType;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->serviceId) {
            $res['serviceId'] = $this->serviceId;
        }

        if (null !== $this->serviceType) {
            $res['serviceType'] = $this->serviceType;
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
        if (isset($map['chargeWay'])) {
            if (!empty($map['chargeWay'])) {
                $model->chargeWay = [];
                $n1 = 0;
                foreach ($map['chargeWay'] as $item1) {
                    $model->chargeWay[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['meta'])) {
            if (!empty($map['meta'])) {
                $model->meta = [];
                foreach ($map['meta'] as $key1 => $value1) {
                    $model->meta[$key1] = $value1;
                }
            }
        }

        if (isset($map['modelType'])) {
            $model->modelType = $map['modelType'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['serviceId'])) {
            $model->serviceId = $map['serviceId'];
        }

        if (isset($map['serviceType'])) {
            $model->serviceType = $map['serviceType'];
        }

        return $model;
    }
}
