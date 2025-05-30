<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListDocsResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $categoryId;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $docId;

    /**
     * @var string
     */
    public $docName;

    /**
     * @var string
     */
    public $docType;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $statusMessage;
    protected $_name = [
        'categoryId' => 'CategoryId',
        'createTime' => 'CreateTime',
        'docId' => 'DocId',
        'docName' => 'DocName',
        'docType' => 'DocType',
        'status' => 'Status',
        'statusMessage' => 'StatusMessage',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->docId) {
            $res['DocId'] = $this->docId;
        }

        if (null !== $this->docName) {
            $res['DocName'] = $this->docName;
        }

        if (null !== $this->docType) {
            $res['DocType'] = $this->docType;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->statusMessage) {
            $res['StatusMessage'] = $this->statusMessage;
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
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['DocId'])) {
            $model->docId = $map['DocId'];
        }

        if (isset($map['DocName'])) {
            $model->docName = $map['DocName'];
        }

        if (isset($map['DocType'])) {
            $model->docType = $map['DocType'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['StatusMessage'])) {
            $model->statusMessage = $map['StatusMessage'];
        }

        return $model;
    }
}
