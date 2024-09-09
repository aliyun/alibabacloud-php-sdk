<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\SelectImageTaskResponseBody\imageInfos;
use AlibabaCloud\Tea\Model;

class SelectImageTaskResponseBody extends Model
{
    /**
     * @example Failed to proxy flink ui request, message: An error occurred: Invalid UUID string: jobsn
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @example 1
     *
     * @var string
     */
    public $failed;

    /**
     * @example PLATFORM
     *
     * @var string
     */
    public $generationSource;

    /**
     * @example 1
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @var imageInfos[]
     */
    public $imageInfos;

    /**
     * @description Id of the request
     *
     * @example 0E8B1746-AE35-5C4B-A3A8-345B274AE32C
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 1
     *
     * @var string
     */
    public $scene;

    /**
     * @example Successed
     *
     * @var string
     */
    public $status;

    /**
     * @example 1
     *
     * @var string
     */
    public $subtaskProcessing;

    /**
     * @example 1
     *
     * @var string
     */
    public $success;

    /**
     * @example 10
     *
     * @var string
     */
    public $total;
    protected $_name = [
        'errorMessage'      => 'errorMessage',
        'failed'            => 'failed',
        'generationSource'  => 'generationSource',
        'gmtCreate'         => 'gmtCreate',
        'imageInfos'        => 'imageInfos',
        'requestId'         => 'requestId',
        'scene'             => 'scene',
        'status'            => 'status',
        'subtaskProcessing' => 'subtaskProcessing',
        'success'           => 'success',
        'total'             => 'total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorMessage) {
            $res['errorMessage'] = $this->errorMessage;
        }
        if (null !== $this->failed) {
            $res['failed'] = $this->failed;
        }
        if (null !== $this->generationSource) {
            $res['generationSource'] = $this->generationSource;
        }
        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->imageInfos) {
            $res['imageInfos'] = [];
            if (null !== $this->imageInfos && \is_array($this->imageInfos)) {
                $n = 0;
                foreach ($this->imageInfos as $item) {
                    $res['imageInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->scene) {
            $res['scene'] = $this->scene;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->subtaskProcessing) {
            $res['subtaskProcessing'] = $this->subtaskProcessing;
        }
        if (null !== $this->success) {
            $res['success'] = $this->success;
        }
        if (null !== $this->total) {
            $res['total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SelectImageTaskResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['errorMessage'])) {
            $model->errorMessage = $map['errorMessage'];
        }
        if (isset($map['failed'])) {
            $model->failed = $map['failed'];
        }
        if (isset($map['generationSource'])) {
            $model->generationSource = $map['generationSource'];
        }
        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }
        if (isset($map['imageInfos'])) {
            if (!empty($map['imageInfos'])) {
                $model->imageInfos = [];
                $n                 = 0;
                foreach ($map['imageInfos'] as $item) {
                    $model->imageInfos[$n++] = null !== $item ? imageInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['scene'])) {
            $model->scene = $map['scene'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['subtaskProcessing'])) {
            $model->subtaskProcessing = $map['subtaskProcessing'];
        }
        if (isset($map['success'])) {
            $model->success = $map['success'];
        }
        if (isset($map['total'])) {
            $model->total = $map['total'];
        }

        return $model;
    }
}
