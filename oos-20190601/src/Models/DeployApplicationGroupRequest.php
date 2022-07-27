<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Tea\Model;

class DeployApplicationGroupRequest extends Model
{
    /**
     * @var string
     */
    public $applicationName;

    /**
     * @var string
     */
    public $deployParameters;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'applicationName'  => 'ApplicationName',
        'deployParameters' => 'DeployParameters',
        'name'             => 'Name',
        'regionId'         => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationName) {
            $res['ApplicationName'] = $this->applicationName;
        }
        if (null !== $this->deployParameters) {
            $res['DeployParameters'] = $this->deployParameters;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeployApplicationGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationName'])) {
            $model->applicationName = $map['ApplicationName'];
        }
        if (isset($map['DeployParameters'])) {
            $model->deployParameters = $map['DeployParameters'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
