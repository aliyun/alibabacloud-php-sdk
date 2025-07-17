<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\TestDataSourceConnectivityResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\TestDataSourceConnectivityResponseBody\connectivity\detailLogs;
use AlibabaCloud\Tea\Model;

class connectivity extends Model
{
    /**
     * @description The error message returned if the connectivity test fails. No such a message is returned if the connectivity test is successful.
     *
     * @var string
     */
    public $connectMessage;

    /**
     * @description The result of the connectivity test. Valid values: Connectable: The network can be connected. ConfigError: The network can be connected, but the configurations are incorrect. Unreachable: The network cannot be connected. Unsupport: An error is reported due to other causes. For example, the desired resource group is being initialized.
     *
     * @example Connectable
     *
     * @var string
     */
    public $connectState;

    /**
     * @description The detailed logs of each step in the connectivity test.
     *
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
