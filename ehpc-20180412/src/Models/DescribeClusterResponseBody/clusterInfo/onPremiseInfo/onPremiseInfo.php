<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeClusterResponseBody\clusterInfo\onPremiseInfo;

use AlibabaCloud\Tea\Model;

class onPremiseInfo extends Model
{
    /**
     * @description The hostname of the on-premises management nodes.
     *
     * @example testecs
     *
     * @var string
     */
    public $hostName;

    /**
     * @description The IP address of the on-premises management nodes.
     *
     * @example 192.168.*.*
     *
     * @var string
     */
    public $IP;

    /**
     * @description The type of on-premises management nodes. Valid values:
     *
     * - account, scheduler
     * @example scheduler
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'hostName' => 'HostName',
        'IP'       => 'IP',
        'type'     => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->IP) {
            $res['IP'] = $this->IP;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return onPremiseInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['IP'])) {
            $model->IP = $map['IP'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
