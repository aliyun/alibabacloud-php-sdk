<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetRuleResponseBody\rule;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetRuleResponseBody\rule\hosts\hostAccounts;

class hosts extends Model
{
    /**
     * @var hostAccounts[]
     */
    public $hostAccounts;

    /**
     * @var string
     */
    public $hostId;
    protected $_name = [
        'hostAccounts' => 'HostAccounts',
        'hostId' => 'HostId',
    ];

    public function validate()
    {
        if (\is_array($this->hostAccounts)) {
            Model::validateArray($this->hostAccounts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hostAccounts) {
            if (\is_array($this->hostAccounts)) {
                $res['HostAccounts'] = [];
                $n1 = 0;
                foreach ($this->hostAccounts as $item1) {
                    $res['HostAccounts'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->hostId) {
            $res['HostId'] = $this->hostId;
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
        if (isset($map['HostAccounts'])) {
            if (!empty($map['HostAccounts'])) {
                $model->hostAccounts = [];
                $n1 = 0;
                foreach ($map['HostAccounts'] as $item1) {
                    $model->hostAccounts[$n1] = hostAccounts::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['HostId'])) {
            $model->hostId = $map['HostId'];
        }

        return $model;
    }
}
