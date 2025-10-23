<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models;

use AlibabaCloud\Dara\Model;

class DocumentDetailItem extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $docHash;

    /**
     * @var string
     */
    public $docName;

    /**
     * @var string
     */
    public $docUrl;

    /**
     * @var string
     */
    public $folderId;

    /**
     * @var string
     */
    public $folderName;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $jobStatus;

    /**
     * @var string
     */
    public $originDocName;

    /**
     * @var string
     */
    public $originDocUrl;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'createTime' => 'createTime',
        'docHash' => 'docHash',
        'docName' => 'docName',
        'docUrl' => 'docUrl',
        'folderId' => 'folderId',
        'folderName' => 'folderName',
        'id' => 'id',
        'jobId' => 'jobId',
        'jobStatus' => 'jobStatus',
        'originDocName' => 'originDocName',
        'originDocUrl' => 'originDocUrl',
        'updateTime' => 'updateTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->docHash) {
            $res['docHash'] = $this->docHash;
        }

        if (null !== $this->docName) {
            $res['docName'] = $this->docName;
        }

        if (null !== $this->docUrl) {
            $res['docUrl'] = $this->docUrl;
        }

        if (null !== $this->folderId) {
            $res['folderId'] = $this->folderId;
        }

        if (null !== $this->folderName) {
            $res['folderName'] = $this->folderName;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->jobId) {
            $res['jobId'] = $this->jobId;
        }

        if (null !== $this->jobStatus) {
            $res['jobStatus'] = $this->jobStatus;
        }

        if (null !== $this->originDocName) {
            $res['originDocName'] = $this->originDocName;
        }

        if (null !== $this->originDocUrl) {
            $res['originDocUrl'] = $this->originDocUrl;
        }

        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
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
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['docHash'])) {
            $model->docHash = $map['docHash'];
        }

        if (isset($map['docName'])) {
            $model->docName = $map['docName'];
        }

        if (isset($map['docUrl'])) {
            $model->docUrl = $map['docUrl'];
        }

        if (isset($map['folderId'])) {
            $model->folderId = $map['folderId'];
        }

        if (isset($map['folderName'])) {
            $model->folderName = $map['folderName'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['jobId'])) {
            $model->jobId = $map['jobId'];
        }

        if (isset($map['jobStatus'])) {
            $model->jobStatus = $map['jobStatus'];
        }

        if (isset($map['originDocName'])) {
            $model->originDocName = $map['originDocName'];
        }

        if (isset($map['originDocUrl'])) {
            $model->originDocUrl = $map['originDocUrl'];
        }

        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }

        return $model;
    }
}
