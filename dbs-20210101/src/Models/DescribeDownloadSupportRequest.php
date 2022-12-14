<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20210101\Models;

use AlibabaCloud\Tea\Model;

class DescribeDownloadSupportRequest extends Model
{
    /**
     * @description The ID of the instance.
     *
     * @example rm-bp1a48p922r4b****
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The ID of the region in which the instance resides. You can call the [DescribeDBInstanceAttribute](~~26231~~) operation to query the region ID of the instance.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionCode;
    protected $_name = [
        'instanceName' => 'InstanceName',
        'regionCode'   => 'RegionCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->regionCode) {
            $res['RegionCode'] = $this->regionCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDownloadSupportRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['RegionCode'])) {
            $model->regionCode = $map['RegionCode'];
        }

        return $model;
    }
}
