<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\TestDataSourceConnectivityResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\TestDataSourceConnectivityResponseBody\connectivity\detailLogs;

class connectivity extends Model
{
    /**
     * @var string
     */
    public $connectMessage;

    /**
     * @var string
     */
    public $connectState;

    /**
     * @var detailLogs[]
     */
    public $detailLogs;
    protected $_name = [
        'connectMessage' => 'ConnectMessage',
        'connectState' => 'ConnectState',
        'detailLogs' => 'DetailLogs',
    ];

    public function validate()
    {
        if (\is_array($this->detailLogs)) {
            Model::validateArray($this->detailLogs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->connectMessage) {
            $res['ConnectMessage'] = $this->connectMessage;
        }

        if (null !== $this->connectState) {
            $res['ConnectState'] = $this->connectState;
        }

        if (null !== $this->detailLogs) {
            if (\is_array($this->detailLogs)) {
                $res['DetailLogs'] = [];
                $n1 = 0;
                foreach ($this->detailLogs as $item1) {
                    $res['DetailLogs'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ConnectMessage'])) {
            $model->connectMessage = $map['ConnectMessage'];
        }

        if (isset($map['ConnectState'])) {
            $model->connectState = $map['ConnectState'];
        }

        if (isset($map['DetailLogs'])) {
            if (!empty($map['DetailLogs'])) {
                $model->detailLogs = [];
                $n1 = 0;
                foreach ($map['DetailLogs'] as $item1) {
                    $model->detailLogs[$n1++] = detailLogs::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
