<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devopsrdc\V20200303\Models;

use AlibabaCloud\Tea\Model;

class ListPipelinesRequest extends Model
{
    /**
     * @var string
     */
    public $orgId;

    /**
     * @var string
     */
    public $pipelineName;

    /**
     * @var string
     */
    public $creators;

    /**
     * @var string
     */
    public $operators;

    /**
     * @var string
     */
    public $resultStatusList;

    /**
     * @var string
     */
    public $createStartTime;

    /**
     * @var string
     */
    public $createEndTime;

    /**
     * @var string
     */
    public $executeStartTime;

    /**
     * @var string
     */
    public $executeEndTime;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $pageStart;

    /**
     * @var string
     */
    public $userPk;
    protected $_name = [
        'orgId'            => 'OrgId',
        'pipelineName'     => 'PipelineName',
        'creators'         => 'Creators',
        'operators'        => 'Operators',
        'resultStatusList' => 'ResultStatusList',
        'createStartTime'  => 'CreateStartTime',
        'createEndTime'    => 'CreateEndTime',
        'executeStartTime' => 'ExecuteStartTime',
        'executeEndTime'   => 'ExecuteEndTime',
        'pageSize'         => 'PageSize',
        'pageStart'        => 'PageStart',
        'userPk'           => 'UserPk',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->orgId) {
            $res['OrgId'] = $this->orgId;
        }
        if (null !== $this->pipelineName) {
            $res['PipelineName'] = $this->pipelineName;
        }
        if (null !== $this->creators) {
            $res['Creators'] = $this->creators;
        }
        if (null !== $this->operators) {
            $res['Operators'] = $this->operators;
        }
        if (null !== $this->resultStatusList) {
            $res['ResultStatusList'] = $this->resultStatusList;
        }
        if (null !== $this->createStartTime) {
            $res['CreateStartTime'] = $this->createStartTime;
        }
        if (null !== $this->createEndTime) {
            $res['CreateEndTime'] = $this->createEndTime;
        }
        if (null !== $this->executeStartTime) {
            $res['ExecuteStartTime'] = $this->executeStartTime;
        }
        if (null !== $this->executeEndTime) {
            $res['ExecuteEndTime'] = $this->executeEndTime;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pageStart) {
            $res['PageStart'] = $this->pageStart;
        }
        if (null !== $this->userPk) {
            $res['UserPk'] = $this->userPk;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPipelinesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OrgId'])) {
            $model->orgId = $map['OrgId'];
        }
        if (isset($map['PipelineName'])) {
            $model->pipelineName = $map['PipelineName'];
        }
        if (isset($map['Creators'])) {
            $model->creators = $map['Creators'];
        }
        if (isset($map['Operators'])) {
            $model->operators = $map['Operators'];
        }
        if (isset($map['ResultStatusList'])) {
            $model->resultStatusList = $map['ResultStatusList'];
        }
        if (isset($map['CreateStartTime'])) {
            $model->createStartTime = $map['CreateStartTime'];
        }
        if (isset($map['CreateEndTime'])) {
            $model->createEndTime = $map['CreateEndTime'];
        }
        if (isset($map['ExecuteStartTime'])) {
            $model->executeStartTime = $map['ExecuteStartTime'];
        }
        if (isset($map['ExecuteEndTime'])) {
            $model->executeEndTime = $map['ExecuteEndTime'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PageStart'])) {
            $model->pageStart = $map['PageStart'];
        }
        if (isset($map['UserPk'])) {
            $model->userPk = $map['UserPk'];
        }

        return $model;
    }
}
