<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\Tea\Model;

class SubmitOssFileCopyJobShrinkRequest extends Model
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
     * @var string
     */
    public $sourceStorageShrink;

    /**
     * @var string
     */
    public $targetStorageShrink;

    /**
     * @var string
     */
    public $userData;
    protected $_name = [
        'notify'              => 'Notify',
        'region'              => 'Region',
        'sourceStorageShrink' => 'SourceStorage',
        'targetStorageShrink' => 'TargetStorage',
        'userData'            => 'UserData',
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
        if (null !== $this->sourceStorageShrink) {
            $res['SourceStorage'] = $this->sourceStorageShrink;
        }
        if (null !== $this->targetStorageShrink) {
            $res['TargetStorage'] = $this->targetStorageShrink;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitOssFileCopyJobShrinkRequest
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
            $model->sourceStorageShrink = $map['SourceStorage'];
        }
        if (isset($map['TargetStorage'])) {
            $model->targetStorageShrink = $map['TargetStorage'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
