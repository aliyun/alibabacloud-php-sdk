<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeGlobalDataNetworkListResponseBody\items;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeGlobalDataNetworkListResponseBody\items\networks\channels;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeGlobalDataNetworkListResponseBody\items\networks\networkTopology;

class networks extends Model
{
    /**
     * @var channels[]
     */
    public $channels;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $networkDescription;

    /**
     * @var string
     */
    public $networkId;

    /**
     * @var string
     */
    public $networkStatus;

    /**
     * @var networkTopology
     */
    public $networkTopology;
    protected $_name = [
        'channels' => 'Channels',
        'createTime' => 'CreateTime',
        'networkDescription' => 'NetworkDescription',
        'networkId' => 'NetworkId',
        'networkStatus' => 'NetworkStatus',
        'networkTopology' => 'NetworkTopology',
    ];

    public function validate()
    {
        if (\is_array($this->channels)) {
            Model::validateArray($this->channels);
        }
        if (null !== $this->networkTopology) {
            $this->networkTopology->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->channels) {
            if (\is_array($this->channels)) {
                $res['Channels'] = [];
                $n1 = 0;
                foreach ($this->channels as $item1) {
                    $res['Channels'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->networkDescription) {
            $res['NetworkDescription'] = $this->networkDescription;
        }

        if (null !== $this->networkId) {
            $res['NetworkId'] = $this->networkId;
        }

        if (null !== $this->networkStatus) {
            $res['NetworkStatus'] = $this->networkStatus;
        }

        if (null !== $this->networkTopology) {
            $res['NetworkTopology'] = null !== $this->networkTopology ? $this->networkTopology->toArray($noStream) : $this->networkTopology;
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
        if (isset($map['Channels'])) {
            if (!empty($map['Channels'])) {
                $model->channels = [];
                $n1 = 0;
                foreach ($map['Channels'] as $item1) {
                    $model->channels[$n1] = channels::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['NetworkDescription'])) {
            $model->networkDescription = $map['NetworkDescription'];
        }

        if (isset($map['NetworkId'])) {
            $model->networkId = $map['NetworkId'];
        }

        if (isset($map['NetworkStatus'])) {
            $model->networkStatus = $map['NetworkStatus'];
        }

        if (isset($map['NetworkTopology'])) {
            $model->networkTopology = networkTopology::fromMap($map['NetworkTopology']);
        }

        return $model;
    }
}
