<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitOssFileCopyJobRequest\sourceStorage;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitOssFileCopyJobRequest\targetStorage;
use AlibabaCloud\Tea\Model;

class SubmitOssFileCopyJobRequest extends Model
{
    /**
     * @var string
     */
    public $notify;

    /**
     * @var string
     */
    public $region;

    /**
     * @var sourceStorage
     */
    public $sourceStorage;

    /**
     * @var targetStorage
     */
    public $targetStorage;

    /**
     * @var string
     */
    public $userData;
    protected $_name = [
        'notify'        => 'Notify',
        'region'        => 'Region',
        'sourceStorage' => 'SourceStorage',
        'targetStorage' => 'TargetStorage',
        'userData'      => 'UserData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->notify) {
            $res['Notify'] = $this->notify;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->sourceStorage) {
            $res['SourceStorage'] = null !== $this->sourceStorage ? $this->sourceStorage->toMap() : null;
        }
        if (null !== $this->targetStorage) {
            $res['TargetStorage'] = null !== $this->targetStorage ? $this->targetStorage->toMap() : null;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitOssFileCopyJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Notify'])) {
            $model->notify = $map['Notify'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['SourceStorage'])) {
            $model->sourceStorage = sourceStorage::fromMap($map['SourceStorage']);
        }
        if (isset($map['TargetStorage'])) {
            $model->targetStorage = targetStorage::fromMap($map['TargetStorage']);
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
