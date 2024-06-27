<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class CreateExtensionsRequest extends Model
{
    /**
     * @description The instance ID.
     *
     * This parameter is required.
     * @example gp-xxxxxxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The name of the database.
     *
     * This parameter is required.
     * @example demo1
     *
     * @var string
     */
    public $DBNames;

    /**
     * @description The name of the extension that you want to install. Separate multiple extension names with commas (,).
     *
     * This parameter is required.
     * @example citext, dblink
     *
     * @var string
     */
    public $extensions;

    /**
     * @description The region ID.
     *
     * >  You can call the [DescribeRegions](https://help.aliyun.com/document_detail/86912.html) operation to query the most recent region list.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'DBInstanceId' => 'DBInstanceId',
        'DBNames'      => 'DBNames',
        'extensions'   => 'Extensions',
        'regionId'     => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->DBNames) {
            $res['DBNames'] = $this->DBNames;
        }
        if (null !== $this->extensions) {
            $res['Extensions'] = $this->extensions;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateExtensionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DBNames'])) {
            $model->DBNames = $map['DBNames'];
        }
        if (isset($map['Extensions'])) {
            $model->extensions = $map['Extensions'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
