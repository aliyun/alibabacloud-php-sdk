<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudcontrol\V20220830\Models;

use AlibabaCloud\Dara\Model;

class GetPriceRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var mixed[]
     */
    public $resourceAttributes;
    protected $_name = [
        'regionId' => 'regionId',
        'resourceAttributes' => 'resourceAttributes',
    ];

    public function validate()
    {
        if (\is_array($this->resourceAttributes)) {
            Model::validateArray($this->resourceAttributes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }

        if (null !== $this->resourceAttributes) {
            if (\is_array($this->resourceAttributes)) {
                $res['resourceAttributes'] = [];
                foreach ($this->resourceAttributes as $key1 => $value1) {
                    $res['resourceAttributes'][$key1] = $value1;
                }
            }
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
        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        if (isset($map['resourceAttributes'])) {
            if (!empty($map['resourceAttributes'])) {
                $model->resourceAttributes = [];
                foreach ($map['resourceAttributes'] as $key1 => $value1) {
                    $model->resourceAttributes[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
