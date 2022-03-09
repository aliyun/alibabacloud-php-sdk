<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models;

use AlibabaCloud\SDK\Holowatcher\V20200730\Models\DatasetUpdateOneResponseBody\note;
use AlibabaCloud\Tea\Model;

class DatasetUpdateOneResponseBody extends Model
{
    /**
     * @var string
     */
    public $bizType;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $gmtPublished;

    /**
     * @var int
     */
    public $id;

    /**
     * @var note
     */
    public $note;

    /**
     * @var string
     */
    public $ossKey;

    /**
     * @var string
     */
    public $publishStatus;

    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $typeId;
    protected $_name = [
        'bizType'       => 'BizType',
        'gmtCreate'     => 'GmtCreate',
        'gmtModified'   => 'GmtModified',
        'gmtPublished'  => 'GmtPublished',
        'id'            => 'Id',
        'note'          => 'Note',
        'ossKey'        => 'OssKey',
        'publishStatus' => 'PublishStatus',
        'requestId'     => 'RequestId',
        'status'        => 'Status',
        'typeId'        => 'TypeId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->gmtPublished) {
            $res['GmtPublished'] = $this->gmtPublished;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->note) {
            $res['Note'] = null !== $this->note ? $this->note->toMap() : null;
        }
        if (null !== $this->ossKey) {
            $res['OssKey'] = $this->ossKey;
        }
        if (null !== $this->publishStatus) {
            $res['PublishStatus'] = $this->publishStatus;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->typeId) {
            $res['TypeId'] = $this->typeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DatasetUpdateOneResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['GmtPublished'])) {
            $model->gmtPublished = $map['GmtPublished'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Note'])) {
            $model->note = note::fromMap($map['Note']);
        }
        if (isset($map['OssKey'])) {
            $model->ossKey = $map['OssKey'];
        }
        if (isset($map['PublishStatus'])) {
            $model->publishStatus = $map['PublishStatus'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TypeId'])) {
            $model->typeId = $map['TypeId'];
        }

        return $model;
    }
}
