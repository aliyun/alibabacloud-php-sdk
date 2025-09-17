<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudcontrol\V20220830\Models\GetResourcesResponseBody;

use AlibabaCloud\Dara\Model;

class resource extends Model
{
    /**
     * @var mixed[]
     */
    public $resourceAttributes;

    /**
     * @var string
     */
    public $resourceId;
    protected $_name = [
        'resourceAttributes' => 'resourceAttributes',
        'resourceId' => 'resourceId',
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
        if (null !== $this->resourceAttributes) {
            if (\is_array($this->resourceAttributes)) {
                $res['resourceAttributes'] = [];
                foreach ($this->resourceAttributes as $key1 => $value1) {
                    $res['resourceAttributes'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->resourceId) {
            $res['resourceId'] = $this->resourceId;
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
        if (isset($map['resourceAttributes'])) {
            if (!empty($map['resourceAttributes'])) {
                $model->resourceAttributes = [];
                foreach ($map['resourceAttributes'] as $key1 => $value1) {
                    $model->resourceAttributes[$key1] = $value1;
                }
            }
        }

        if (isset($map['resourceId'])) {
            $model->resourceId = $map['resourceId'];
        }

        return $model;
    }
}
