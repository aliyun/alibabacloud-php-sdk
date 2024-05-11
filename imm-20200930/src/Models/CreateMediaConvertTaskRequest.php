<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\SDK\Imm\V20200930\Models\CreateMediaConvertTaskRequest\sources;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateMediaConvertTaskRequest\targets;
use AlibabaCloud\Tea\Model;

class CreateMediaConvertTaskRequest extends Model
{
    /**
     * @var int
     */
    public $alignmentIndex;

    /**
     * @var CredentialConfig
     */
    public $credentialConfig;

    /**
     * @description 消息通知配置，支持使用MNS、RocketMQ接收异步消息通知。
     *
     * @var Notification
     */
    public $notification;

    /**
     * @description This parameter is required.
     *
     * @example immtest
     *
     * @var string
     */
    public $projectName;

    /**
     * @description This parameter is required.
     *
     * @var sources[]
     */
    public $sources;

    /**
     * @example {"test":"val1"}
     *
     * @var mixed[]
     */
    public $tags;

    /**
     * @description This parameter is required.
     *
     * @var targets[]
     */
    public $targets;

    /**
     * @example {"ID": "user1","Name": "test-user1","Avatar": "http://example.com?id=user1"}
     *
     * @var string
     */
    public $userData;
    protected $_name = [
        'alignmentIndex'   => 'AlignmentIndex',
        'credentialConfig' => 'CredentialConfig',
        'notification'     => 'Notification',
        'projectName'      => 'ProjectName',
        'sources'          => 'Sources',
        'tags'             => 'Tags',
        'targets'          => 'Targets',
        'userData'         => 'UserData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alignmentIndex) {
            $res['AlignmentIndex'] = $this->alignmentIndex;
        }
        if (null !== $this->credentialConfig) {
            $res['CredentialConfig'] = null !== $this->credentialConfig ? $this->credentialConfig->toMap() : null;
        }
        if (null !== $this->notification) {
            $res['Notification'] = null !== $this->notification ? $this->notification->toMap() : null;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->sources) {
            $res['Sources'] = [];
            if (null !== $this->sources && \is_array($this->sources)) {
                $n = 0;
                foreach ($this->sources as $item) {
                    $res['Sources'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->targets) {
            $res['Targets'] = [];
            if (null !== $this->targets && \is_array($this->targets)) {
                $n = 0;
                foreach ($this->targets as $item) {
                    $res['Targets'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateMediaConvertTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlignmentIndex'])) {
            $model->alignmentIndex = $map['AlignmentIndex'];
        }
        if (isset($map['CredentialConfig'])) {
            $model->credentialConfig = CredentialConfig::fromMap($map['CredentialConfig']);
        }
        if (isset($map['Notification'])) {
            $model->notification = Notification::fromMap($map['Notification']);
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['Sources'])) {
            if (!empty($map['Sources'])) {
                $model->sources = [];
                $n              = 0;
                foreach ($map['Sources'] as $item) {
                    $model->sources[$n++] = null !== $item ? sources::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['Targets'])) {
            if (!empty($map['Targets'])) {
                $model->targets = [];
                $n              = 0;
                foreach ($map['Targets'] as $item) {
                    $model->targets[$n++] = null !== $item ? targets::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
