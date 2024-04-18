<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Tea\Model;

class DeleteApplicationRequest extends Model
{
    /**
     * @description Specifies whether to forcibly delete the application. Valid values:
     *
     *   true
     *   false
     *
     * @example False
     *
     * @var bool
     */
    public $force;

    /**
     * @description The application name.
     *
     * @example MyApplication
     *
     * @var string
     */
    public $name;

    /**
     * @description The region ID. Set the value to cn-hangzhou.
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
        'force'          => 'Force',
        'name'           => 'Name',
        'regionId'       => 'RegionId',
        'retainResource' => 'RetainResource',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->force) {
            $res['Force'] = $this->force;
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
     * @return DeleteApplicationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Force'])) {
            $model->force = $map['Force'];
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
