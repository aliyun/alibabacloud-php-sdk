<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Tea\Model;

class DeleteApplicationGroupRequest extends Model
{
    /**
     * @description The name of the application.
     *
     * @example MyApplication
     *
     * @var string
     */
    public $applicationName;

    /**
     * @description The name of the application group.
     *
     * @example MyApplicationGroup
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the region. Set the value to cn-hangzhou.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Specifies whether to retain resources created by application manager when deleting the application. Valid values:
     * - false
     * @example false
     *
     * @var bool
     */
    public $retainResource;
    protected $_name = [
        'applicationName' => 'ApplicationName',
        'name'            => 'Name',
        'regionId'        => 'RegionId',
        'retainResource'  => 'RetainResource',
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->retainResource) {
            $res['RetainResource'] = $this->retainResource;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteApplicationGroupRequest
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RetainResource'])) {
            $model->retainResource = $map['RetainResource'];
        }

        return $model;
    }
}
