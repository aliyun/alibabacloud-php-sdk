<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models\DescribeProjectAttachmentsResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $attachmentToken;

    /**
     * @var string
     */
    public $attachmentType;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $fileLink;

    /**
     * @var int
     */
    public $fileLinkGmtExpired;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var int
     */
    public $fileSize;

    /**
     * @var string
     */
    public $fileSuffix;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $nodeId;

    /**
     * @var string
     */
    public $nodeName;

    /**
     * @var int
     */
    public $operator;

    /**
     * @var string
     */
    public $operatorName;

    /**
     * @var string
     */
    public $operatorRole;

    /**
     * @var int
     */
    public $stepNo;
    protected $_name = [
        'attachmentToken'    => 'AttachmentToken',
        'attachmentType'     => 'AttachmentType',
        'content'            => 'Content',
        'fileLink'           => 'FileLink',
        'fileLinkGmtExpired' => 'FileLinkGmtExpired',
        'fileName'           => 'FileName',
        'fileSize'           => 'FileSize',
        'fileSuffix'         => 'FileSuffix',
        'gmtCreate'          => 'GmtCreate',
        'nodeId'             => 'NodeId',
        'nodeName'           => 'NodeName',
        'operator'           => 'Operator',
        'operatorName'       => 'OperatorName',
        'operatorRole'       => 'OperatorRole',
        'stepNo'             => 'StepNo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attachmentToken) {
            $res['AttachmentToken'] = $this->attachmentToken;
        }
        if (null !== $this->attachmentType) {
            $res['AttachmentType'] = $this->attachmentType;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->fileLink) {
            $res['FileLink'] = $this->fileLink;
        }
        if (null !== $this->fileLinkGmtExpired) {
            $res['FileLinkGmtExpired'] = $this->fileLinkGmtExpired;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->fileSize) {
            $res['FileSize'] = $this->fileSize;
        }
        if (null !== $this->fileSuffix) {
            $res['FileSuffix'] = $this->fileSuffix;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }
        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }
        if (null !== $this->operatorName) {
            $res['OperatorName'] = $this->operatorName;
        }
        if (null !== $this->operatorRole) {
            $res['OperatorRole'] = $this->operatorRole;
        }
        if (null !== $this->stepNo) {
            $res['StepNo'] = $this->stepNo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AttachmentToken'])) {
            $model->attachmentToken = $map['AttachmentToken'];
        }
        if (isset($map['AttachmentType'])) {
            $model->attachmentType = $map['AttachmentType'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['FileLink'])) {
            $model->fileLink = $map['FileLink'];
        }
        if (isset($map['FileLinkGmtExpired'])) {
            $model->fileLinkGmtExpired = $map['FileLinkGmtExpired'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['FileSize'])) {
            $model->fileSize = $map['FileSize'];
        }
        if (isset($map['FileSuffix'])) {
            $model->fileSuffix = $map['FileSuffix'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }
        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }
        if (isset($map['OperatorName'])) {
            $model->operatorName = $map['OperatorName'];
        }
        if (isset($map['OperatorRole'])) {
            $model->operatorRole = $map['OperatorRole'];
        }
        if (isset($map['StepNo'])) {
            $model->stepNo = $map['StepNo'];
        }

        return $model;
    }
}
