<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\TestDataSourceConnectivityResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\TestDataSourceConnectivityResponseBody\connectivity\detailLogs;
use AlibabaCloud\Tea\Model;

class connectivity extends Model
{
    /**
     * @var string
     */
    public $connectMessage;

    /**
     * @example Connectable
     *
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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->connectMessage) {
            $res['ConnectMessage'] = $this->connectMessage;
        }
        if (null !== $this->connectState) {
            $res['ConnectState'] = $this->connectState;
        }
        if (null !== $this->detailLogs) {
            $res['DetailLogs'] = [];
            if (null !== $this->detailLogs && \is_array($this->detailLogs)) {
                $n = 0;
                foreach ($this->detailLogs as $item) {
                    $res['DetailLogs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return connectivity
     */
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
                $n = 0;
                foreach ($map['DetailLogs'] as $item) {
                    $model->detailLogs[$n++] = null !== $item ? detailLogs::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
