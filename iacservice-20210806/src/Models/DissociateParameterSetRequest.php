<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models;

use AlibabaCloud\Dara\Model;

class DissociateParameterSetRequest extends Model
{
    /**
     * @var string[]
     */
    public $parameterSetIds;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'parameterSetIds' => 'parameterSetIds',
        'resourceId' => 'resourceId',
        'resourceType' => 'resourceType',
    ];

    public function validate()
    {
        if (\is_array($this->parameterSetIds)) {
            Model::validateArray($this->parameterSetIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->parameterSetIds) {
            if (\is_array($this->parameterSetIds)) {
                $res['parameterSetIds'] = [];
                $n1 = 0;
                foreach ($this->parameterSetIds as $item1) {
                    $res['parameterSetIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->resourceId) {
            $res['resourceId'] = $this->resourceId;
        }

        if (null !== $this->resourceType) {
            $res['resourceType'] = $this->resourceType;
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
        if (isset($map['parameterSetIds'])) {
            if (!empty($map['parameterSetIds'])) {
                $model->parameterSetIds = [];
                $n1 = 0;
                foreach ($map['parameterSetIds'] as $item1) {
                    $model->parameterSetIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['resourceId'])) {
            $model->resourceId = $map['resourceId'];
        }

        if (isset($map['resourceType'])) {
            $model->resourceType = $map['resourceType'];
        }

        return $model;
    }
}
