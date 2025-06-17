<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListMediaLiveInputsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListMediaLiveInputsResponseBody\inputs\inputInfos;

class inputs extends Model
{
    /**
     * @var string[]
     */
    public $channelIds;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $inputId;

    /**
     * @var inputInfos[]
     */
    public $inputInfos;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string[]
     */
    public $securityGroupIds;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'channelIds' => 'ChannelIds',
        'createTime' => 'CreateTime',
        'inputId' => 'InputId',
        'inputInfos' => 'InputInfos',
        'name' => 'Name',
        'securityGroupIds' => 'SecurityGroupIds',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->channelIds)) {
            Model::validateArray($this->channelIds);
        }
        if (\is_array($this->inputInfos)) {
            Model::validateArray($this->inputInfos);
        }
        if (\is_array($this->securityGroupIds)) {
            Model::validateArray($this->securityGroupIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->channelIds) {
            if (\is_array($this->channelIds)) {
                $res['ChannelIds'] = [];
                $n1 = 0;
                foreach ($this->channelIds as $item1) {
                    $res['ChannelIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->inputId) {
            $res['InputId'] = $this->inputId;
        }

        if (null !== $this->inputInfos) {
            if (\is_array($this->inputInfos)) {
                $res['InputInfos'] = [];
                $n1 = 0;
                foreach ($this->inputInfos as $item1) {
                    $res['InputInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->securityGroupIds) {
            if (\is_array($this->securityGroupIds)) {
                $res['SecurityGroupIds'] = [];
                $n1 = 0;
                foreach ($this->securityGroupIds as $item1) {
                    $res['SecurityGroupIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['ChannelIds'])) {
            if (!empty($map['ChannelIds'])) {
                $model->channelIds = [];
                $n1 = 0;
                foreach ($map['ChannelIds'] as $item1) {
                    $model->channelIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['InputId'])) {
            $model->inputId = $map['InputId'];
        }

        if (isset($map['InputInfos'])) {
            if (!empty($map['InputInfos'])) {
                $model->inputInfos = [];
                $n1 = 0;
                foreach ($map['InputInfos'] as $item1) {
                    $model->inputInfos[$n1] = inputInfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['SecurityGroupIds'])) {
            if (!empty($map['SecurityGroupIds'])) {
                $model->securityGroupIds = [];
                $n1 = 0;
                foreach ($map['SecurityGroupIds'] as $item1) {
                    $model->securityGroupIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
