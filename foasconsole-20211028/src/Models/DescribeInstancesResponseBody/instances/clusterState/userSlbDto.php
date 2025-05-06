<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20211028\Models\DescribeInstancesResponseBody\instances\clusterState;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\DescribeInstancesResponseBody\instances\clusterState\userSlbDto\userSlbListeners;

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
        'existSlb' => 'ExistSlb',
        'slbId' => 'SlbId',
        'slbIp' => 'SlbIp',
        'slbStatus' => 'SlbStatus',
        'userSlbListeners' => 'UserSlbListeners',
    ];

    public function validate()
    {
        if (\is_array($this->userSlbListeners)) {
            Model::validateArray($this->userSlbListeners);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->userSlbListeners)) {
                $res['UserSlbListeners'] = [];
                $n1 = 0;
                foreach ($this->userSlbListeners as $item1) {
                    $res['UserSlbListeners'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
                $n1 = 0;
                foreach ($map['UserSlbListeners'] as $item1) {
                    $model->userSlbListeners[$n1++] = userSlbListeners::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
