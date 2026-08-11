<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ModelStudio\V20260210\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\ListModelPermissionsRequest\filter;

class ListModelPermissionsRequest extends Model
{
    /**
     * @var string
     */
    public $authorizationScope;

    /**
     * @var filter
     */
    public $filter;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $modelAction;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'authorizationScope' => 'authorizationScope',
        'filter' => 'filter',
        'maxResults' => 'maxResults',
        'modelAction' => 'modelAction',
        'nextToken' => 'nextToken',
        'workspaceId' => 'workspaceId',
    ];

    public function validate()
    {
        if (null !== $this->filter) {
            $this->filter->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authorizationScope) {
            $res['authorizationScope'] = $this->authorizationScope;
        }

        if (null !== $this->filter) {
            $res['filter'] = null !== $this->filter ? $this->filter->toArray($noStream) : $this->filter;
        }

        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }

        if (null !== $this->modelAction) {
            $res['modelAction'] = $this->modelAction;
        }

        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        if (null !== $this->workspaceId) {
            $res['workspaceId'] = $this->workspaceId;
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
        if (isset($map['authorizationScope'])) {
            $model->authorizationScope = $map['authorizationScope'];
        }

        if (isset($map['filter'])) {
            $model->filter = filter::fromMap($map['filter']);
        }

        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }

        if (isset($map['modelAction'])) {
            $model->modelAction = $map['modelAction'];
        }

        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        return $model;
    }
}
