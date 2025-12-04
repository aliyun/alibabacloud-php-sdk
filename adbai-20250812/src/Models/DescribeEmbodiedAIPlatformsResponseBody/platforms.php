<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ADBAI\V20250812\Models\DescribeEmbodiedAIPlatformsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ADBAI\V20250812\Models\DescribeEmbodiedAIPlatformsResponseBody\platforms\eapConfig;
use AlibabaCloud\SDK\ADBAI\V20250812\Models\DescribeEmbodiedAIPlatformsResponseBody\platforms\rayConfig;

class platforms extends Model
{
    /**
     * @var int
     */
    public $createTime;

    /**
     * @var eapConfig
     */
    public $eapConfig;

    /**
     * @var string
     */
    public $ossBucketName;

    /**
     * @var string
     */
    public $platformName;

    /**
     * @var rayConfig
     */
    public $rayConfig;

    /**
     * @var string
     */
    public $state;
    protected $_name = [
        'createTime' => 'CreateTime',
        'eapConfig' => 'EapConfig',
        'ossBucketName' => 'OssBucketName',
        'platformName' => 'PlatformName',
        'rayConfig' => 'RayConfig',
        'state' => 'State',
    ];

    public function validate()
    {
        if (null !== $this->eapConfig) {
            $this->eapConfig->validate();
        }
        if (null !== $this->rayConfig) {
            $this->rayConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->eapConfig) {
            $res['EapConfig'] = null !== $this->eapConfig ? $this->eapConfig->toArray($noStream) : $this->eapConfig;
        }

        if (null !== $this->ossBucketName) {
            $res['OssBucketName'] = $this->ossBucketName;
        }

        if (null !== $this->platformName) {
            $res['PlatformName'] = $this->platformName;
        }

        if (null !== $this->rayConfig) {
            $res['RayConfig'] = null !== $this->rayConfig ? $this->rayConfig->toArray($noStream) : $this->rayConfig;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['EapConfig'])) {
            $model->eapConfig = eapConfig::fromMap($map['EapConfig']);
        }

        if (isset($map['OssBucketName'])) {
            $model->ossBucketName = $map['OssBucketName'];
        }

        if (isset($map['PlatformName'])) {
            $model->platformName = $map['PlatformName'];
        }

        if (isset($map['RayConfig'])) {
            $model->rayConfig = rayConfig::fromMap($map['RayConfig']);
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
