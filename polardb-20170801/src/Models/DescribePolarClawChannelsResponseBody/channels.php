<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribePolarClawChannelsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribePolarClawChannelsResponseBody\channels\accounts;

class channels extends Model
{
    /**
     * @var accounts[]
     */
    public $accounts;

    /**
     * @var string
     */
    public $channelId;

    /**
     * @var bool
     */
    public $configured;

    /**
     * @var string
     */
    public $defaultAccountId;

    /**
     * @var bool
     */
    public $enabled;
    protected $_name = [
        'accounts' => 'Accounts',
        'channelId' => 'ChannelId',
        'configured' => 'Configured',
        'defaultAccountId' => 'DefaultAccountId',
        'enabled' => 'Enabled',
    ];

    public function validate()
    {
        if (\is_array($this->accounts)) {
            Model::validateArray($this->accounts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accounts) {
            if (\is_array($this->accounts)) {
                $res['Accounts'] = [];
                $n1 = 0;
                foreach ($this->accounts as $item1) {
                    $res['Accounts'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }

        if (null !== $this->configured) {
            $res['Configured'] = $this->configured;
        }

        if (null !== $this->defaultAccountId) {
            $res['DefaultAccountId'] = $this->defaultAccountId;
        }

        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
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
        if (isset($map['Accounts'])) {
            if (!empty($map['Accounts'])) {
                $model->accounts = [];
                $n1 = 0;
                foreach ($map['Accounts'] as $item1) {
                    $model->accounts[$n1] = accounts::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }

        if (isset($map['Configured'])) {
            $model->configured = $map['Configured'];
        }

        if (isset($map['DefaultAccountId'])) {
            $model->defaultAccountId = $map['DefaultAccountId'];
        }

        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }

        return $model;
    }
}
