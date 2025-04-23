<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models;

use AlibabaCloud\Dara\Model;

class CloneGroupRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string[]
     */
    public $resourceTypes;
    protected $_name = [
        'clientToken' => 'clientToken',
        'description' => 'description',
        'name' => 'name',
        'projectId' => 'projectId',
        'resourceTypes' => 'resourceTypes',
    ];

    public function validate()
    {
        if (\is_array($this->resourceTypes)) {
            Model::validateArray($this->resourceTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->projectId) {
            $res['projectId'] = $this->projectId;
        }

        if (null !== $this->resourceTypes) {
            if (\is_array($this->resourceTypes)) {
                $res['resourceTypes'] = [];
                $n1 = 0;
                foreach ($this->resourceTypes as $item1) {
                    $res['resourceTypes'][$n1++] = $item1;
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
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['projectId'])) {
            $model->projectId = $map['projectId'];
        }

        if (isset($map['resourceTypes'])) {
            if (!empty($map['resourceTypes'])) {
                $model->resourceTypes = [];
                $n1 = 0;
                foreach ($map['resourceTypes'] as $item1) {
                    $model->resourceTypes[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
