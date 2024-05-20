<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111\Models;

use AlibabaCloud\SDK\CGCS\V20211111\Models\StopAppSessionBatchShrinkRequest\tags;
use AlibabaCloud\Tea\Model;

class StopAppSessionBatchShrinkRequest extends Model
{
    /**
     * @example 13027****
     *
     * @var string
     */
    public $appId;

    /**
     * @example 35067****
     *
     * @var string
     */
    public $appVersion;

    /**
     * @description This parameter is required.
     *
     * @example 6d4d****
     *
     * @var string
     */
    public $batchId;

    /**
     * @example d9a8****
     *
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $stopParamShrink;

    /**
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'appId'           => 'AppId',
        'appVersion'      => 'AppVersion',
        'batchId'         => 'BatchId',
        'projectId'       => 'ProjectId',
        'stopParamShrink' => 'StopParam',
        'tags'            => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appVersion) {
            $res['AppVersion'] = $this->appVersion;
        }
        if (null !== $this->batchId) {
            $res['BatchId'] = $this->batchId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->stopParamShrink) {
            $res['StopParam'] = $this->stopParamShrink;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StopAppSessionBatchShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppVersion'])) {
            $model->appVersion = $map['AppVersion'];
        }
        if (isset($map['BatchId'])) {
            $model->batchId = $map['BatchId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['StopParam'])) {
            $model->stopParamShrink = $map['StopParam'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
