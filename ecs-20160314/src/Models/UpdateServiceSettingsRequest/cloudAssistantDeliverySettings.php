<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\UpdateServiceSettingsRequest;

use AlibabaCloud\Tea\Model;

class cloudAssistantDeliverySettings extends Model
{
    /**
     * @var string
     */
    public $ossBucketName;

    /**
     * @var bool
     */
    public $ossEnabled;

    /**
     * @var string
     */
    public $ossKeyPrefix;

    /**
     * @var bool
     */
    public $slsEnabled;

    /**
     * @var string
     */
    public $slsLogstoreName;

    /**
     * @var string
     */
    public $slsProjectName;
    protected $_name = [
        'ossBucketName'   => 'OssBucketName',
        'ossEnabled'      => 'OssEnabled',
        'ossKeyPrefix'    => 'OssKeyPrefix',
        'slsEnabled'      => 'SlsEnabled',
        'slsLogstoreName' => 'SlsLogstoreName',
        'slsProjectName'  => 'SlsProjectName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ossBucketName) {
            $res['OssBucketName'] = $this->ossBucketName;
        }
        if (null !== $this->ossEnabled) {
            $res['OssEnabled'] = $this->ossEnabled;
        }
        if (null !== $this->ossKeyPrefix) {
            $res['OssKeyPrefix'] = $this->ossKeyPrefix;
        }
        if (null !== $this->slsEnabled) {
            $res['SlsEnabled'] = $this->slsEnabled;
        }
        if (null !== $this->slsLogstoreName) {
            $res['SlsLogstoreName'] = $this->slsLogstoreName;
        }
        if (null !== $this->slsProjectName) {
            $res['SlsProjectName'] = $this->slsProjectName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cloudAssistantDeliverySettings
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OssBucketName'])) {
            $model->ossBucketName = $map['OssBucketName'];
        }
        if (isset($map['OssEnabled'])) {
            $model->ossEnabled = $map['OssEnabled'];
        }
        if (isset($map['OssKeyPrefix'])) {
            $model->ossKeyPrefix = $map['OssKeyPrefix'];
        }
        if (isset($map['SlsEnabled'])) {
            $model->slsEnabled = $map['SlsEnabled'];
        }
        if (isset($map['SlsLogstoreName'])) {
            $model->slsLogstoreName = $map['SlsLogstoreName'];
        }
        if (isset($map['SlsProjectName'])) {
            $model->slsProjectName = $map['SlsProjectName'];
        }

        return $model;
    }
}
