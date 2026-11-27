<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class GetRumSymbolicStackRequest extends Model
{
    /**
     * @var string
     */
    public $fileInfo;

    /**
     * @var string
     */
    public $images;

    /**
     * @var string
     */
    public $pid;

    /**
     * @var string
     */
    public $serviceId;

    /**
     * @var string
     */
    public $stack;

    /**
     * @var string
     */
    public $stackType;

    /**
     * @var string
     */
    public $threadId;

    /**
     * @var string
     */
    public $workspace;
    protected $_name = [
        'fileInfo' => 'fileInfo',
        'images' => 'images',
        'pid' => 'pid',
        'serviceId' => 'serviceId',
        'stack' => 'stack',
        'stackType' => 'stackType',
        'threadId' => 'threadId',
        'workspace' => 'workspace',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fileInfo) {
            $res['fileInfo'] = $this->fileInfo;
        }

        if (null !== $this->images) {
            $res['images'] = $this->images;
        }

        if (null !== $this->pid) {
            $res['pid'] = $this->pid;
        }

        if (null !== $this->serviceId) {
            $res['serviceId'] = $this->serviceId;
        }

        if (null !== $this->stack) {
            $res['stack'] = $this->stack;
        }

        if (null !== $this->stackType) {
            $res['stackType'] = $this->stackType;
        }

        if (null !== $this->threadId) {
            $res['threadId'] = $this->threadId;
        }

        if (null !== $this->workspace) {
            $res['workspace'] = $this->workspace;
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
        if (isset($map['fileInfo'])) {
            $model->fileInfo = $map['fileInfo'];
        }

        if (isset($map['images'])) {
            $model->images = $map['images'];
        }

        if (isset($map['pid'])) {
            $model->pid = $map['pid'];
        }

        if (isset($map['serviceId'])) {
            $model->serviceId = $map['serviceId'];
        }

        if (isset($map['stack'])) {
            $model->stack = $map['stack'];
        }

        if (isset($map['stackType'])) {
            $model->stackType = $map['stackType'];
        }

        if (isset($map['threadId'])) {
            $model->threadId = $map['threadId'];
        }

        if (isset($map['workspace'])) {
            $model->workspace = $map['workspace'];
        }

        return $model;
    }
}
