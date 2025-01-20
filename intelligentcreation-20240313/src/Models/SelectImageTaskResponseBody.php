<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\SelectImageTaskResponseBody\imageInfos;

class SelectImageTaskResponseBody extends Model
{
    /**
     * @var string
     */
    public $errorMessage;
    /**
     * @var string
     */
    public $failed;
    /**
     * @var string
     */
    public $generationSource;
    /**
     * @var string
     */
    public $gmtCreate;
    /**
     * @var imageInfos[]
     */
    public $imageInfos;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var string
     */
    public $scene;
    /**
     * @var string
     */
    public $status;
    /**
     * @var string
     */
    public $subtaskProcessing;
    /**
     * @var string
     */
    public $success;
    /**
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
        if (\is_array($this->imageInfos)) {
            Model::validateArray($this->imageInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->imageInfos)) {
                $res['imageInfos'] = [];
                $n1                = 0;
                foreach ($this->imageInfos as $item1) {
                    $res['imageInfos'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1                = 0;
                foreach ($map['imageInfos'] as $item1) {
                    $model->imageInfos[$n1++] = imageInfos::fromMap($item1);
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
