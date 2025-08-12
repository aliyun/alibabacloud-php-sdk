<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\EntityGroupBase\entityQueries;

class EntityGroupBase extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $entityGroupId;

    /**
     * @var string
     */
    public $entityGroupName;

    /**
     * @var entityQueries[]
     */
    public $entityQueries;

    /**
     * @var EntityDiscoverRule
     */
    public $entityRules;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $workspace;
    protected $_name = [
        'description' => 'description',
        'entityGroupId' => 'entityGroupId',
        'entityGroupName' => 'entityGroupName',
        'entityQueries' => 'entityQueries',
        'entityRules' => 'entityRules',
        'regionId' => 'regionId',
        'userId' => 'userId',
        'workspace' => 'workspace',
    ];

    public function validate()
    {
        if (\is_array($this->entityQueries)) {
            Model::validateArray($this->entityQueries);
        }
        if (null !== $this->entityRules) {
            $this->entityRules->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->entityGroupId) {
            $res['entityGroupId'] = $this->entityGroupId;
        }

        if (null !== $this->entityGroupName) {
            $res['entityGroupName'] = $this->entityGroupName;
        }

        if (null !== $this->entityQueries) {
            if (\is_array($this->entityQueries)) {
                $res['entityQueries'] = [];
                $n1 = 0;
                foreach ($this->entityQueries as $item1) {
                    $res['entityQueries'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->entityRules) {
            $res['entityRules'] = null !== $this->entityRules ? $this->entityRules->toArray($noStream) : $this->entityRules;
        }

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }

        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
        }

        if (null !== $this->workspace) {
            $res['workspace'] = $this->workspace;
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
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['entityGroupId'])) {
            $model->entityGroupId = $map['entityGroupId'];
        }

        if (isset($map['entityGroupName'])) {
            $model->entityGroupName = $map['entityGroupName'];
        }

        if (isset($map['entityQueries'])) {
            if (!empty($map['entityQueries'])) {
                $model->entityQueries = [];
                $n1 = 0;
                foreach ($map['entityQueries'] as $item1) {
                    $model->entityQueries[$n1] = entityQueries::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['entityRules'])) {
            $model->entityRules = EntityDiscoverRule::fromMap($map['entityRules']);
        }

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        if (isset($map['workspace'])) {
            $model->workspace = $map['workspace'];
        }

        return $model;
    }
}
