<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models;

use AlibabaCloud\Dara\Model;

class ListDataAgentSessionRequest extends Model
{
    /**
     * @var int
     */
    public $createEndTime;

    /**
     * @var int
     */
    public $createStartTime;

    /**
     * @var string
     */
    public $customAgentId;

    /**
     * @var string
     */
    public $DMSUnit;

    /**
     * @var bool
     */
    public $isSaved;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $queryType;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'createEndTime' => 'CreateEndTime',
        'createStartTime' => 'CreateStartTime',
        'customAgentId' => 'CustomAgentId',
        'DMSUnit' => 'DMSUnit',
        'isSaved' => 'IsSaved',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'queryType' => 'QueryType',
        'title' => 'Title',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createEndTime) {
            $res['CreateEndTime'] = $this->createEndTime;
        }

        if (null !== $this->createStartTime) {
            $res['CreateStartTime'] = $this->createStartTime;
        }

        if (null !== $this->customAgentId) {
            $res['CustomAgentId'] = $this->customAgentId;
        }

        if (null !== $this->DMSUnit) {
            $res['DMSUnit'] = $this->DMSUnit;
        }

        if (null !== $this->isSaved) {
            $res['IsSaved'] = $this->isSaved;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->queryType) {
            $res['QueryType'] = $this->queryType;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['CreateEndTime'])) {
            $model->createEndTime = $map['CreateEndTime'];
        }

        if (isset($map['CreateStartTime'])) {
            $model->createStartTime = $map['CreateStartTime'];
        }

        if (isset($map['CustomAgentId'])) {
            $model->customAgentId = $map['CustomAgentId'];
        }

        if (isset($map['DMSUnit'])) {
            $model->DMSUnit = $map['DMSUnit'];
        }

        if (isset($map['IsSaved'])) {
            $model->isSaved = $map['IsSaved'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['QueryType'])) {
            $model->queryType = $map['QueryType'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
