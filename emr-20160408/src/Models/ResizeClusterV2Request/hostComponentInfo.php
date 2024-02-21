<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ResizeClusterV2Request;

use AlibabaCloud\Tea\Model;

class hostComponentInfo extends Model
{
    /**
     * @example NAMENODE
     *
     * @var string[]
     */
    public $componentNameList;

    /**
     * @example emr-header-1
     *
     * @var string
     */
    public $hostName;

    /**
     * @example HDFS
     *
     * @var string
     */
    public $serviceName;
    protected $_name = [
        'componentNameList' => 'ComponentNameList',
        'hostName'          => 'HostName',
        'serviceName'       => 'ServiceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->componentNameList) {
            $res['ComponentNameList'] = $this->componentNameList;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hostComponentInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ComponentNameList'])) {
            if (!empty($map['ComponentNameList'])) {
                $model->componentNameList = $map['ComponentNameList'];
            }
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }

        return $model;
    }
}
