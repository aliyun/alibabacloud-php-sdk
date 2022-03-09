<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models;

use AlibabaCloud\Tea\Model;

class DatasetFindAllRequest extends Model
{
    /**
     * @var string
     */
    public $aliyunJwt;

    /**
     * @var string
     */
    public $bizType;

    /**
     * @var bool
     */
    public $noProject;

    /**
     * @var int
     */
    public $notProjectId;

    /**
     * @var string
     */
    public $note;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $sort;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $typeId;
    protected $_name = [
        'aliyunJwt'    => 'AliyunJwt',
        'bizType'      => 'BizType',
        'noProject'    => 'NoProject',
        'notProjectId' => 'NotProjectId',
        'note'         => 'Note',
        'projectId'    => 'ProjectId',
        'size'         => 'Size',
        'sort'         => 'Sort',
        'status'       => 'Status',
        'typeId'       => 'TypeId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliyunJwt) {
            $res['AliyunJwt'] = $this->aliyunJwt;
        }
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->noProject) {
            $res['NoProject'] = $this->noProject;
        }
        if (null !== $this->notProjectId) {
            $res['NotProjectId'] = $this->notProjectId;
        }
        if (null !== $this->note) {
            $res['Note'] = $this->note;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->sort) {
            $res['Sort'] = $this->sort;
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
     * @return DatasetFindAllRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliyunJwt'])) {
            $model->aliyunJwt = $map['AliyunJwt'];
        }
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['NoProject'])) {
            $model->noProject = $map['NoProject'];
        }
        if (isset($map['NotProjectId'])) {
            $model->notProjectId = $map['NotProjectId'];
        }
        if (isset($map['Note'])) {
            $model->note = $map['Note'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['Sort'])) {
            $model->sort = $map['Sort'];
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
