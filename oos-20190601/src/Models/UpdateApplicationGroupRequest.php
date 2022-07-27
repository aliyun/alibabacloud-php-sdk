<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Tea\Model;

class UpdateApplicationGroupRequest extends Model
{
    /**
     * @var string
     */
    public $applicationName;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $newName;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'applicationName' => 'ApplicationName',
        'name'            => 'Name',
        'newName'         => 'NewName',
        'regionId'        => 'RegionId',
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
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->newName) {
            $res['NewName'] = $this->newName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateApplicationGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationName'])) {
            $model->applicationName = $map['ApplicationName'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NewName'])) {
            $model->newName = $map['NewName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
