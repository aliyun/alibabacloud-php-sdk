<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\SDK\Cms\V20240330\Models\EntityGroupBase\entityQueries;
use AlibabaCloud\Tea\Model;

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

    public function validate() {}

    public function toMap()
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
            $res['entityQueries'] = [];
            if (null !== $this->entityQueries && \is_array($this->entityQueries)) {
                $n = 0;
                foreach ($this->entityQueries as $item) {
                    $res['entityQueries'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->entityRules) {
            $res['entityRules'] = null !== $this->entityRules ? $this->entityRules->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return EntityGroupBase
     */
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
                $n = 0;
                foreach ($map['entityQueries'] as $item) {
                    $model->entityQueries[$n++] = null !== $item ? entityQueries::fromMap($item) : $item;
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
