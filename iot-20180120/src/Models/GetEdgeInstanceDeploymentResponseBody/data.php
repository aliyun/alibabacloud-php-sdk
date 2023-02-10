<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\GetEdgeInstanceDeploymentResponseBody;

use AlibabaCloud\SDK\Iot\V20180120\Models\GetEdgeInstanceDeploymentResponseBody\data\taskList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 9261e308a9504fde9b4cf8462b0b****
     *
     * @var string
     */
    public $deploymentId;

    /**
     * @example deploy_1561543948874
     *
     * @var string
     */
    public $description;

    /**
     * @example 2019-06-26 18:12:35
     *
     * @var string
     */
    public $gmtCompleted;

    /**
     * @example 1581912859713
     *
     * @var int
     */
    public $gmtCompletedTimestamp;

    /**
     * @example 2019-06-26 18:12:29
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 1581912859713
     *
     * @var int
     */
    public $gmtCreateTimestamp;

    /**
     * @example 2019-06-26 18:12:35
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example 1581912859713
     *
     * @var int
     */
    public $gmtModifiedTimestamp;

    /**
     * @example 2
     *
     * @var int
     */
    public $status;

    /**
     * @var taskList[]
     */
    public $taskList;

    /**
     * @example deploy
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'deploymentId'          => 'DeploymentId',
        'description'           => 'Description',
        'gmtCompleted'          => 'GmtCompleted',
        'gmtCompletedTimestamp' => 'GmtCompletedTimestamp',
        'gmtCreate'             => 'GmtCreate',
        'gmtCreateTimestamp'    => 'GmtCreateTimestamp',
        'gmtModified'           => 'GmtModified',
        'gmtModifiedTimestamp'  => 'GmtModifiedTimestamp',
        'status'                => 'Status',
        'taskList'              => 'TaskList',
        'type'                  => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deploymentId) {
            $res['DeploymentId'] = $this->deploymentId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->gmtCompleted) {
            $res['GmtCompleted'] = $this->gmtCompleted;
        }
        if (null !== $this->gmtCompletedTimestamp) {
            $res['GmtCompletedTimestamp'] = $this->gmtCompletedTimestamp;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtCreateTimestamp) {
            $res['GmtCreateTimestamp'] = $this->gmtCreateTimestamp;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->gmtModifiedTimestamp) {
            $res['GmtModifiedTimestamp'] = $this->gmtModifiedTimestamp;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskList) {
            $res['TaskList'] = [];
            if (null !== $this->taskList && \is_array($this->taskList)) {
                $n = 0;
                foreach ($this->taskList as $item) {
                    $res['TaskList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeploymentId'])) {
            $model->deploymentId = $map['DeploymentId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GmtCompleted'])) {
            $model->gmtCompleted = $map['GmtCompleted'];
        }
        if (isset($map['GmtCompletedTimestamp'])) {
            $model->gmtCompletedTimestamp = $map['GmtCompletedTimestamp'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtCreateTimestamp'])) {
            $model->gmtCreateTimestamp = $map['GmtCreateTimestamp'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['GmtModifiedTimestamp'])) {
            $model->gmtModifiedTimestamp = $map['GmtModifiedTimestamp'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskList'])) {
            if (!empty($map['TaskList'])) {
                $model->taskList = [];
                $n               = 0;
                foreach ($map['TaskList'] as $item) {
                    $model->taskList[$n++] = null !== $item ? taskList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
