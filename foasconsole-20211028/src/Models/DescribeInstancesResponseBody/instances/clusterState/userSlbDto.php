<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20211028\Models\DescribeInstancesResponseBody\instances\clusterState;

use AlibabaCloud\SDK\Foasconsole\V20211028\Models\DescribeInstancesResponseBody\instances\clusterState\userSlbDto\userSlbListeners;
use AlibabaCloud\Tea\Model;

class userSlbDto extends Model
{
    /**
     * @var bool
     */
    public $existSlb;

    /**
     * @var string
     */
    public $slbId;

    /**
     * @var string
     */
    public $slbIp;

    /**
     * @var string
     */
    public $slbStatus;

    /**
     * @var userSlbListeners[]
     */
    public $userSlbListeners;
    protected $_name = [
        'existSlb'         => 'ExistSlb',
        'slbId'            => 'SlbId',
        'slbIp'            => 'SlbIp',
        'slbStatus'        => 'SlbStatus',
        'userSlbListeners' => 'UserSlbListeners',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->existSlb) {
            $res['ExistSlb'] = $this->existSlb;
        }
        if (null !== $this->slbId) {
            $res['SlbId'] = $this->slbId;
        }
        if (null !== $this->slbIp) {
            $res['SlbIp'] = $this->slbIp;
        }
        if (null !== $this->slbStatus) {
            $res['SlbStatus'] = $this->slbStatus;
        }
        if (null !== $this->userSlbListeners) {
            $res['UserSlbListeners'] = [];
            if (null !== $this->userSlbListeners && \is_array($this->userSlbListeners)) {
                $n = 0;
                foreach ($this->userSlbListeners as $item) {
                    $res['UserSlbListeners'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userSlbDto
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExistSlb'])) {
            $model->existSlb = $map['ExistSlb'];
        }
        if (isset($map['SlbId'])) {
            $model->slbId = $map['SlbId'];
        }
        if (isset($map['SlbIp'])) {
            $model->slbIp = $map['SlbIp'];
        }
        if (isset($map['SlbStatus'])) {
            $model->slbStatus = $map['SlbStatus'];
        }
        if (isset($map['UserSlbListeners'])) {
            if (!empty($map['UserSlbListeners'])) {
                $model->userSlbListeners = [];
                $n                       = 0;
                foreach ($map['UserSlbListeners'] as $item) {
                    $model->userSlbListeners[$n++] = null !== $item ? userSlbListeners::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
