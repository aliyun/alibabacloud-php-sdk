<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\NotifyStrategyForModify\routes;

use AlibabaCloud\Dara\Model;

class channels extends Model
{
    /**
     * @var string
     */
    public $channelType;

    /**
     * @var string[]
     */
    public $enabledSubChannels;

    /**
     * @var string[]
     */
    public $receivers;
    protected $_name = [
        'channelType' => 'channelType',
        'enabledSubChannels' => 'enabledSubChannels',
        'receivers' => 'receivers',
    ];

    public function validate()
    {
        if (\is_array($this->enabledSubChannels)) {
            Model::validateArray($this->enabledSubChannels);
        }
        if (\is_array($this->receivers)) {
            Model::validateArray($this->receivers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->channelType) {
            $res['channelType'] = $this->channelType;
        }

        if (null !== $this->enabledSubChannels) {
            if (\is_array($this->enabledSubChannels)) {
                $res['enabledSubChannels'] = [];
                $n1 = 0;
                foreach ($this->enabledSubChannels as $item1) {
                    $res['enabledSubChannels'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->receivers) {
            if (\is_array($this->receivers)) {
                $res['receivers'] = [];
                $n1 = 0;
                foreach ($this->receivers as $item1) {
                    $res['receivers'][$n1++] = $item1;
                }
            }
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
        if (isset($map['channelType'])) {
            $model->channelType = $map['channelType'];
        }

        if (isset($map['enabledSubChannels'])) {
            if (!empty($map['enabledSubChannels'])) {
                $model->enabledSubChannels = [];
                $n1 = 0;
                foreach ($map['enabledSubChannels'] as $item1) {
                    $model->enabledSubChannels[$n1++] = $item1;
                }
            }
        }

        if (isset($map['receivers'])) {
            if (!empty($map['receivers'])) {
                $model->receivers = [];
                $n1 = 0;
                foreach ($map['receivers'] as $item1) {
                    $model->receivers[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
