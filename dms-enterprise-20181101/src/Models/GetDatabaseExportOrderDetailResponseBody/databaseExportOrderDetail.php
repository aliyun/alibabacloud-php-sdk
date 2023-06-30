<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDatabaseExportOrderDetailResponseBody;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDatabaseExportOrderDetailResponseBody\databaseExportOrderDetail\keyInfo;
use AlibabaCloud\Tea\Model;

class databaseExportOrderDetail extends Model
{
    /**
     * @description The business background information of the database export ticket.
     *
     * @var string
     */
    public $comment;

    /**
     * @description The user who submitted the ticket.
     *
     * @example dmsuser
     *
     * @var string
     */
    public $committer;

    /**
     * @description The ID of the user who submitted the ticket. This ID is a user ID and is not the ID of an Alibaba Cloud account.
     *
     * @example 12***
     *
     * @var string
     */
    public $committerId;

    /**
     * @description The ticket ID.
     *
     * @example 821****
     *
     * @var int
     */
    public $id;

    /**
     * @description The key information about the ticket.
     *
     * @var keyInfo
     */
    public $keyInfo;

    /**
     * @description The execution logs.
     *
     * @example 2023-04-12 14:58:32:015 Database Dump Start.
     * 2023-04-12 14:58:32:096 set server side query timeout, sql : set max_execution_time = 0
     * @var string
     */
    public $log;

    /**
     * @description The name that is used to search for the database.
     *
     * @example test@xxx.xxx.xxx.xxx:3306
     *
     * @var string
     */
    public $searchName;

    /**
     * @description The status description of the ticket.
     *
     * @var string
     */
    public $statusDesc;

    /**
     * @description The status description of the workflow.
     *
     * @var string
     */
    public $workflowStatusDesc;
    protected $_name = [
        'comment'            => 'Comment',
        'committer'          => 'Committer',
        'committerId'        => 'CommitterId',
        'id'                 => 'Id',
        'keyInfo'            => 'KeyInfo',
        'log'                => 'Log',
        'searchName'         => 'SearchName',
        'statusDesc'         => 'StatusDesc',
        'workflowStatusDesc' => 'WorkflowStatusDesc',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->committer) {
            $res['Committer'] = $this->committer;
        }
        if (null !== $this->committerId) {
            $res['CommitterId'] = $this->committerId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->keyInfo) {
            $res['KeyInfo'] = null !== $this->keyInfo ? $this->keyInfo->toMap() : null;
        }
        if (null !== $this->log) {
            $res['Log'] = $this->log;
        }
        if (null !== $this->searchName) {
            $res['SearchName'] = $this->searchName;
        }
        if (null !== $this->statusDesc) {
            $res['StatusDesc'] = $this->statusDesc;
        }
        if (null !== $this->workflowStatusDesc) {
            $res['WorkflowStatusDesc'] = $this->workflowStatusDesc;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return databaseExportOrderDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['Committer'])) {
            $model->committer = $map['Committer'];
        }
        if (isset($map['CommitterId'])) {
            $model->committerId = $map['CommitterId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['KeyInfo'])) {
            $model->keyInfo = keyInfo::fromMap($map['KeyInfo']);
        }
        if (isset($map['Log'])) {
            $model->log = $map['Log'];
        }
        if (isset($map['SearchName'])) {
            $model->searchName = $map['SearchName'];
        }
        if (isset($map['StatusDesc'])) {
            $model->statusDesc = $map['StatusDesc'];
        }
        if (isset($map['WorkflowStatusDesc'])) {
            $model->workflowStatusDesc = $map['WorkflowStatusDesc'];
        }

        return $model;
    }
}
