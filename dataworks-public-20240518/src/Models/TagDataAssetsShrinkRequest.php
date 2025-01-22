<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class TagDataAssetsShrinkRequest extends Model
{
    /**
     * @var bool
     */
    public $autoTraceEnabled;
    /**
     * @var string
     */
    public $dataAssetIdsShrink;
    /**
     * @var string
     */
    public $dataAssetType;
    /**
     * @var string
     */
    public $envType;
    /**
     * @var int
     */
    public $projectId;
    /**
     * @var string
     */
    public $tagsShrink;
    protected $_name = [
        'autoTraceEnabled'   => 'AutoTraceEnabled',
        'dataAssetIdsShrink' => 'DataAssetIds',
        'dataAssetType'      => 'DataAssetType',
        'envType'            => 'EnvType',
        'projectId'          => 'ProjectId',
        'tagsShrink'         => 'Tags',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoTraceEnabled) {
            $res['AutoTraceEnabled'] = $this->autoTraceEnabled;
        }

        if (null !== $this->dataAssetIdsShrink) {
            $res['DataAssetIds'] = $this->dataAssetIdsShrink;
        }

        if (null !== $this->dataAssetType) {
            $res['DataAssetType'] = $this->dataAssetType;
        }

        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->tagsShrink) {
            $res['Tags'] = $this->tagsShrink;
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
        if (isset($map['AutoTraceEnabled'])) {
            $model->autoTraceEnabled = $map['AutoTraceEnabled'];
        }

        if (isset($map['DataAssetIds'])) {
            $model->dataAssetIdsShrink = $map['DataAssetIds'];
        }

        if (isset($map['DataAssetType'])) {
            $model->dataAssetType = $map['DataAssetType'];
        }

        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['Tags'])) {
            $model->tagsShrink = $map['Tags'];
        }

        return $model;
    }
}
