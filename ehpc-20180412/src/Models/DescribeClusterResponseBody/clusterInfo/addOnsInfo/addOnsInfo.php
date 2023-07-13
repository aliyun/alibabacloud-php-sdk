<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeClusterResponseBody\clusterInfo\addOnsInfo;

use AlibabaCloud\Tea\Model;

class addOnsInfo extends Model
{
    /**
     * @var string
     */
    public $deployMode;

    /**
     * @var int
     */
    public $port;

    /**
     * @var string
     */
    public $softwareId;

    /**
     * @var string
     */
    public $status;

    /**
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
