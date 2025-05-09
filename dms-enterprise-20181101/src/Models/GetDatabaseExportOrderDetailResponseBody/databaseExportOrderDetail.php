<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDatabaseExportOrderDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDatabaseExportOrderDetailResponseBody\databaseExportOrderDetail\keyInfo;

class databaseExportOrderDetail extends Model
{
    /**
     * @var string
     */
    public $comment;

    /**
     * @var string
     */
    public $committer;

    /**
     * @var string
     */
    public $committerId;

    /**
     * @var int
     */
    public $id;

    /**
     * @var keyInfo
     */
    public $keyInfo;

    /**
     * @var string
     */
    public $log;

    /**
     * @var string
     */
    public $searchName;

    /**
     * @var string
     */
    public $statusDesc;

    /**
     * @var string
     */
    public $workflowStatusDesc;
    protected $_name = [
        'comment' => 'Comment',
        'committer' => 'Committer',
        'committerId' => 'CommitterId',
        'id' => 'Id',
        'keyInfo' => 'KeyInfo',
        'log' => 'Log',
        'searchName' => 'SearchName',
        'statusDesc' => 'StatusDesc',
        'workflowStatusDesc' => 'WorkflowStatusDesc',
    ];

    public function validate()
    {
        if (null !== $this->keyInfo) {
            $this->keyInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['KeyInfo'] = null !== $this->keyInfo ? $this->keyInfo->toArray($noStream) : $this->keyInfo;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
