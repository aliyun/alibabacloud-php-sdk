<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CodeSec\V20260401\Models;

use AlibabaCloud\Dara\Model;

class CompleteCodeBundleResponseBody extends Model
{
    /**
     * @var string
     */
    public $bundleVersion;

    /**
     * @var int
     */
    public $byteSize;

    /**
     * @var int
     */
    public $codeBundleId;

    /**
     * @var string
     */
    public $contentType;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $filename;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $updatedAt;
    protected $_name = [
        'bundleVersion' => 'bundleVersion',
        'byteSize' => 'byteSize',
        'codeBundleId' => 'codeBundleId',
        'contentType' => 'contentType',
        'createdAt' => 'createdAt',
        'filename' => 'filename',
        'projectId' => 'projectId',
        'requestId' => 'requestId',
        'status' => 'status',
        'updatedAt' => 'updatedAt',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bundleVersion) {
            $res['bundleVersion'] = $this->bundleVersion;
        }

        if (null !== $this->byteSize) {
            $res['byteSize'] = $this->byteSize;
        }

        if (null !== $this->codeBundleId) {
            $res['codeBundleId'] = $this->codeBundleId;
        }

        if (null !== $this->contentType) {
            $res['contentType'] = $this->contentType;
        }

        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }

        if (null !== $this->filename) {
            $res['filename'] = $this->filename;
        }

        if (null !== $this->projectId) {
            $res['projectId'] = $this->projectId;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->updatedAt) {
            $res['updatedAt'] = $this->updatedAt;
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
        if (isset($map['bundleVersion'])) {
            $model->bundleVersion = $map['bundleVersion'];
        }

        if (isset($map['byteSize'])) {
            $model->byteSize = $map['byteSize'];
        }

        if (isset($map['codeBundleId'])) {
            $model->codeBundleId = $map['codeBundleId'];
        }

        if (isset($map['contentType'])) {
            $model->contentType = $map['contentType'];
        }

        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }

        if (isset($map['filename'])) {
            $model->filename = $map['filename'];
        }

        if (isset($map['projectId'])) {
            $model->projectId = $map['projectId'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['updatedAt'])) {
            $model->updatedAt = $map['updatedAt'];
        }

        return $model;
    }
}
