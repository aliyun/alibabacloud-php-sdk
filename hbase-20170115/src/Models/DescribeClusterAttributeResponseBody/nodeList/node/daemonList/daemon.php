<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20170115\Models\DescribeClusterAttributeResponseBody\nodeList\node\daemonList;

use AlibabaCloud\Tea\Model;

class daemon extends Model
{
    /**
     * @var string
     */
    public $daemonName;

    /**
     * @var string
     */
    public $daemonStatus;
    protected $_name = [
        'daemonName'   => 'DaemonName',
        'daemonStatus' => 'DaemonStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->daemonName) {
            $res['DaemonName'] = $this->daemonName;
        }
        if (null !== $this->daemonStatus) {
            $res['DaemonStatus'] = $this->daemonStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return daemon
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DaemonName'])) {
            $model->daemonName = $map['DaemonName'];
        }
        if (isset($map['DaemonStatus'])) {
            $model->daemonStatus = $map['DaemonStatus'];
        }

        return $model;
    }
}
