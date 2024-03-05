<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeClusterResponseBody\clusterInfo\addOnsInfo;

use AlibabaCloud\Tea\Model;

class addOnsInfo extends Model
{
    /**
     * @description The deployment mode of the custom component. Valid values:
     *
     *   local
     *   ecs
     *
     * @example local
     *
     * @var string
     */
    public $deployMode;

    /**
     * @description The TCP port number of the custom component.
     *
     * @example 10000
     *
     * @var int
     */
    public $port;

    /**
     * @description The software ID of the component.
     *
     * @example CROMWELL_85
     *
     * @var string
     */
    public $softwareId;

    /**
     * @description The running status of the custom component. Valid values:
     *
     *   running
     *   stopped
     *   exception
     *
     * @example running
     *
     * @var string
     */
    public $status;

    /**
     * @description The endpoint of the custom component service.
     *
     * @example http://172.16.10.12:10000/
     *
     * @var string
     */
    public $URL;
    protected $_name = [
        'deployMode' => 'DeployMode',
        'port'       => 'Port',
        'softwareId' => 'SoftwareId',
        'status'     => 'Status',
        'URL'        => 'URL',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deployMode) {
            $res['DeployMode'] = $this->deployMode;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->softwareId) {
            $res['SoftwareId'] = $this->softwareId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->URL) {
            $res['URL'] = $this->URL;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return addOnsInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeployMode'])) {
            $model->deployMode = $map['DeployMode'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['SoftwareId'])) {
            $model->softwareId = $map['SoftwareId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['URL'])) {
            $model->URL = $map['URL'];
        }

        return $model;
    }
}
