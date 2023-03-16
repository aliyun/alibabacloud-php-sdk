<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\TestNetworkConnectionResponseBody;

use AlibabaCloud\Tea\Model;

class taskList extends Model
{
    /**
     * @description The reason why the data source and resource group failed the connectivity test. If data source and the resource group passed the connectivity test, this parameter is left empty.
     *
     * @var string
     */
    public $connectMessage;

    /**
     * @description The result of the connectivity test. Valid values:
     *
     *   true: The data source and the resource group passed the connectivity test.
     *   false: The data source and the resource group failed the connectivity test. You can troubleshoot issues based on the ConnectMessage parameter.
     *
     * @example true
     *
     * @var bool
     */
    public $connectStatus;
    protected $_name = [
        'connectMessage' => 'ConnectMessage',
        'connectStatus'  => 'ConnectStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connectMessage) {
            $res['ConnectMessage'] = $this->connectMessage;
        }
        if (null !== $this->connectStatus) {
            $res['ConnectStatus'] = $this->connectStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return taskList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnectMessage'])) {
            $model->connectMessage = $map['ConnectMessage'];
        }
        if (isset($map['ConnectStatus'])) {
            $model->connectStatus = $map['ConnectStatus'];
        }

        return $model;
    }
}
