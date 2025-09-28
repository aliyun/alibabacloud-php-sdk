<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\ListIntegrationPoliciesResponseBody\policies;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListIntegrationPoliciesResponseBody\policies\entityGroup\entityRules;

class entityGroup extends Model
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
     * @var entityRules
     */
    public $entityRules;

    /**
     * @var string
     */
    public $query;

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
        'entityRules' => 'entityRules',
        'query' => 'query',
        'regionId' => 'regionId',
        'userId' => 'userId',
        'workspace' => 'workspace',
    ];

    public function validate()
    {
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

        if (null !== $this->entityRules) {
            $res['entityRules'] = null !== $this->entityRules ? $this->entityRules->toArray($noStream) : $this->entityRules;
        }

        if (null !== $this->query) {
            $res['query'] = $this->query;
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

        if (isset($map['entityRules'])) {
            $model->entityRules = entityRules::fromMap($map['entityRules']);
        }

        if (isset($map['query'])) {
            $model->query = $map['query'];
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
