<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class ListMaintainWindowsRequest extends Model
{
    /**
     * @var string
     */
    public $direction;

    /**
     * @var bool
     */
    public $enable;

    /**
     * @var string
     */
    public $maintainWindowId;

    /**
     * @var string
     */
    public $maintainWindowName;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $orderBy;

    /**
     * @var string
     */
    public $workspace;
    protected $_name = [
        'direction' => 'direction',
        'enable' => 'enable',
        'maintainWindowId' => 'maintainWindowId',
        'maintainWindowName' => 'maintainWindowName',
        'maxResults' => 'maxResults',
        'nextToken' => 'nextToken',
        'orderBy' => 'orderBy',
        'workspace' => 'workspace',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->direction) {
            $res['direction'] = $this->direction;
        }

        if (null !== $this->enable) {
            $res['enable'] = $this->enable;
        }

        if (null !== $this->maintainWindowId) {
            $res['maintainWindowId'] = $this->maintainWindowId;
        }

        if (null !== $this->maintainWindowName) {
            $res['maintainWindowName'] = $this->maintainWindowName;
        }

        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        if (null !== $this->orderBy) {
            $res['orderBy'] = $this->orderBy;
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
        if (isset($map['direction'])) {
            $model->direction = $map['direction'];
        }

        if (isset($map['enable'])) {
            $model->enable = $map['enable'];
        }

        if (isset($map['maintainWindowId'])) {
            $model->maintainWindowId = $map['maintainWindowId'];
        }

        if (isset($map['maintainWindowName'])) {
            $model->maintainWindowName = $map['maintainWindowName'];
        }

        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }

        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        if (isset($map['orderBy'])) {
            $model->orderBy = $map['orderBy'];
        }

        if (isset($map['workspace'])) {
            $model->workspace = $map['workspace'];
        }

        return $model;
    }
}
