<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class IncidentResourceDetail extends Model
{
    /**
     * @var string
     */
    public $extraId;

    /**
     * @var mixed[]
     */
    public $resourceId;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'extraId' => 'extraId',
        'resourceId' => 'resourceId',
        'type' => 'type',
    ];

    public function validate()
    {
        if (\is_array($this->resourceId)) {
            Model::validateArray($this->resourceId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->extraId) {
            $res['extraId'] = $this->extraId;
        }

        if (null !== $this->resourceId) {
            if (\is_array($this->resourceId)) {
                $res['resourceId'] = [];
                foreach ($this->resourceId as $key1 => $value1) {
                    $res['resourceId'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['extraId'])) {
            $model->extraId = $map['extraId'];
        }

        if (isset($map['resourceId'])) {
            if (!empty($map['resourceId'])) {
                $model->resourceId = [];
                foreach ($map['resourceId'] as $key1 => $value1) {
                    $model->resourceId[$key1] = $value1;
                }
            }
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
