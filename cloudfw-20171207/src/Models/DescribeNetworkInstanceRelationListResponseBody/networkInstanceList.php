<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeNetworkInstanceRelationListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeNetworkInstanceRelationListResponseBody\networkInstanceList\peerNetworkInstanceList;

class networkInstanceList extends Model
{
    /**
     * @var string
     */
    public $connectType;

    /**
     * @var string
     */
    public $networkInstanceId;

    /**
     * @var string
     */
    public $networkInstanceName;

    /**
     * @var string
     */
    public $networkInstanceType;

    /**
     * @var peerNetworkInstanceList[]
     */
    public $peerNetworkInstanceList;

    /**
     * @var string
     */
    public $regionNo;
    protected $_name = [
        'connectType' => 'ConnectType',
        'networkInstanceId' => 'NetworkInstanceId',
        'networkInstanceName' => 'NetworkInstanceName',
        'networkInstanceType' => 'NetworkInstanceType',
        'peerNetworkInstanceList' => 'PeerNetworkInstanceList',
        'regionNo' => 'RegionNo',
    ];

    public function validate()
    {
        if (\is_array($this->peerNetworkInstanceList)) {
            Model::validateArray($this->peerNetworkInstanceList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->connectType) {
            $res['ConnectType'] = $this->connectType;
        }

        if (null !== $this->networkInstanceId) {
            $res['NetworkInstanceId'] = $this->networkInstanceId;
        }

        if (null !== $this->networkInstanceName) {
            $res['NetworkInstanceName'] = $this->networkInstanceName;
        }

        if (null !== $this->networkInstanceType) {
            $res['NetworkInstanceType'] = $this->networkInstanceType;
        }

        if (null !== $this->peerNetworkInstanceList) {
            if (\is_array($this->peerNetworkInstanceList)) {
                $res['PeerNetworkInstanceList'] = [];
                $n1 = 0;
                foreach ($this->peerNetworkInstanceList as $item1) {
                    $res['PeerNetworkInstanceList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->regionNo) {
            $res['RegionNo'] = $this->regionNo;
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
        if (isset($map['ConnectType'])) {
            $model->connectType = $map['ConnectType'];
        }

        if (isset($map['NetworkInstanceId'])) {
            $model->networkInstanceId = $map['NetworkInstanceId'];
        }

        if (isset($map['NetworkInstanceName'])) {
            $model->networkInstanceName = $map['NetworkInstanceName'];
        }

        if (isset($map['NetworkInstanceType'])) {
            $model->networkInstanceType = $map['NetworkInstanceType'];
        }

        if (isset($map['PeerNetworkInstanceList'])) {
            if (!empty($map['PeerNetworkInstanceList'])) {
                $model->peerNetworkInstanceList = [];
                $n1 = 0;
                foreach ($map['PeerNetworkInstanceList'] as $item1) {
                    $model->peerNetworkInstanceList[$n1] = peerNetworkInstanceList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RegionNo'])) {
            $model->regionNo = $map['RegionNo'];
        }

        return $model;
    }
}
