<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListBatchTasksResponseBody\pageResult;

use AlibabaCloud\Dara\Model;

class resultData extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $directory;

    /**
     * @var int
     */
    public $fileId;

    /**
     * @var string
     */
    public $lastSubmitStatus;

    /**
     * @var int
     */
    public $lastVersion;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $nodeId;

    /**
     * @var string
     */
    public $nodeName;

    /**
     * @var string[]
     */
    public $nodeOutputNameList;

    /**
     * @var int
     */
    public $nodeType;

    /**
     * @var int
     */
    public $operatorType;

    /**
     * @var string
     */
    public $ownerName;

    /**
     * @var string
     */
    public $ownerUserId;

    /**
     * @var bool
     */
    public $published;

    /**
     * @var bool
     */
    public $released;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'description' => 'Description',
        'directory' => 'Directory',
        'fileId' => 'FileId',
        'lastSubmitStatus' => 'LastSubmitStatus',
        'lastVersion' => 'LastVersion',
        'name' => 'Name',
        'nodeId' => 'NodeId',
        'nodeName' => 'NodeName',
        'nodeOutputNameList' => 'NodeOutputNameList',
        'nodeType' => 'NodeType',
        'operatorType' => 'OperatorType',
        'ownerName' => 'OwnerName',
        'ownerUserId' => 'OwnerUserId',
        'published' => 'Published',
        'released' => 'Released',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->nodeOutputNameList)) {
            Model::validateArray($this->nodeOutputNameList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->directory) {
            $res['Directory'] = $this->directory;
        }

        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }

        if (null !== $this->lastSubmitStatus) {
            $res['LastSubmitStatus'] = $this->lastSubmitStatus;
        }

        if (null !== $this->lastVersion) {
            $res['LastVersion'] = $this->lastVersion;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }

        if (null !== $this->nodeOutputNameList) {
            if (\is_array($this->nodeOutputNameList)) {
                $res['NodeOutputNameList'] = [];
                $n1 = 0;
                foreach ($this->nodeOutputNameList as $item1) {
                    $res['NodeOutputNameList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
        }

        if (null !== $this->operatorType) {
            $res['OperatorType'] = $this->operatorType;
        }

        if (null !== $this->ownerName) {
            $res['OwnerName'] = $this->ownerName;
        }

        if (null !== $this->ownerUserId) {
            $res['OwnerUserId'] = $this->ownerUserId;
        }

        if (null !== $this->published) {
            $res['Published'] = $this->published;
        }

        if (null !== $this->released) {
            $res['Released'] = $this->released;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Directory'])) {
            $model->directory = $map['Directory'];
        }

        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }

        if (isset($map['LastSubmitStatus'])) {
            $model->lastSubmitStatus = $map['LastSubmitStatus'];
        }

        if (isset($map['LastVersion'])) {
            $model->lastVersion = $map['LastVersion'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }

        if (isset($map['NodeOutputNameList'])) {
            if (!empty($map['NodeOutputNameList'])) {
                $model->nodeOutputNameList = [];
                $n1 = 0;
                foreach ($map['NodeOutputNameList'] as $item1) {
                    $model->nodeOutputNameList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }

        if (isset($map['OperatorType'])) {
            $model->operatorType = $map['OperatorType'];
        }

        if (isset($map['OwnerName'])) {
            $model->ownerName = $map['OwnerName'];
        }

        if (isset($map['OwnerUserId'])) {
            $model->ownerUserId = $map['OwnerUserId'];
        }

        if (isset($map['Published'])) {
            $model->published = $map['Published'];
        }

        if (isset($map['Released'])) {
            $model->released = $map['Released'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
