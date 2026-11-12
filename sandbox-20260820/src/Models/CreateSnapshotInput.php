<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sandbox\V20260820\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sandbox\V20260820\Models\CreateSnapshotInput\resourceTags;

class CreateSnapshotInput extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var resourceTags[]
     */
    public $resourceTags;

    /**
     * @var string
     */
    public $sandboxID;

    /**
     * @var string
     */
    public $teamID;
    protected $_name = [
        'name' => 'name',
        'resourceTags' => 'resourceTags',
        'sandboxID' => 'sandboxID',
        'teamID' => 'teamID',
    ];

    public function validate()
    {
        if (\is_array($this->resourceTags)) {
            Model::validateArray($this->resourceTags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->resourceTags) {
            if (\is_array($this->resourceTags)) {
                $res['resourceTags'] = [];
                $n1 = 0;
                foreach ($this->resourceTags as $item1) {
                    $res['resourceTags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sandboxID) {
            $res['sandboxID'] = $this->sandboxID;
        }

        if (null !== $this->teamID) {
            $res['teamID'] = $this->teamID;
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
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['resourceTags'])) {
            if (!empty($map['resourceTags'])) {
                $model->resourceTags = [];
                $n1 = 0;
                foreach ($map['resourceTags'] as $item1) {
                    $model->resourceTags[$n1] = resourceTags::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['sandboxID'])) {
            $model->sandboxID = $map['sandboxID'];
        }

        if (isset($map['teamID'])) {
            $model->teamID = $map['teamID'];
        }

        return $model;
    }
}
