<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models\CreateAccessConfigurationResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\CreateAccessConfigurationResponseBody\accessConfiguration\tags;

class accessConfiguration extends Model
{
    /**
     * @var string
     */
    public $accessConfigurationId;

    /**
     * @var string
     */
    public $accessConfigurationName;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $relayState;

    /**
     * @var int
     */
    public $sessionDuration;

    /**
     * @var string[]
     */
    public $statusNotifications;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'accessConfigurationId' => 'AccessConfigurationId',
        'accessConfigurationName' => 'AccessConfigurationName',
        'createTime' => 'CreateTime',
        'description' => 'Description',
        'relayState' => 'RelayState',
        'sessionDuration' => 'SessionDuration',
        'statusNotifications' => 'StatusNotifications',
        'tags' => 'Tags',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        if (\is_array($this->statusNotifications)) {
            Model::validateArray($this->statusNotifications);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessConfigurationId) {
            $res['AccessConfigurationId'] = $this->accessConfigurationId;
        }

        if (null !== $this->accessConfigurationName) {
            $res['AccessConfigurationName'] = $this->accessConfigurationName;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->relayState) {
            $res['RelayState'] = $this->relayState;
        }

        if (null !== $this->sessionDuration) {
            $res['SessionDuration'] = $this->sessionDuration;
        }

        if (null !== $this->statusNotifications) {
            if (\is_array($this->statusNotifications)) {
                $res['StatusNotifications'] = [];
                $n1 = 0;
                foreach ($this->statusNotifications as $item1) {
                    $res['StatusNotifications'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['AccessConfigurationId'])) {
            $model->accessConfigurationId = $map['AccessConfigurationId'];
        }

        if (isset($map['AccessConfigurationName'])) {
            $model->accessConfigurationName = $map['AccessConfigurationName'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['RelayState'])) {
            $model->relayState = $map['RelayState'];
        }

        if (isset($map['SessionDuration'])) {
            $model->sessionDuration = $map['SessionDuration'];
        }

        if (isset($map['StatusNotifications'])) {
            if (!empty($map['StatusNotifications'])) {
                $model->statusNotifications = [];
                $n1 = 0;
                foreach ($map['StatusNotifications'] as $item1) {
                    $model->statusNotifications[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
                }
            }
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
