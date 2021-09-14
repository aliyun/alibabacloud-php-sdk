<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models;

use AlibabaCloud\Tea\Model;

class DescribeDedicatedInstanceDistributionResponseBody extends Model
{
    /**
     * @var mixed[]
     */
    public $DBClass;

    /**
     * @var mixed[]
     */
    public $DBVersion;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $instanceCount;

    /**
     * @var mixed[]
     */
    public $DBType;

    /**
     * @var string
     */
    public $dedicatedHostGroupId;
    protected $_name = [
        'DBClass'              => 'DBClass',
        'DBVersion'            => 'DBVersion',
        'requestId'            => 'RequestId',
        'instanceCount'        => 'InstanceCount',
        'DBType'               => 'DBType',
        'dedicatedHostGroupId' => 'DedicatedHostGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBClass) {
            $res['DBClass'] = $this->DBClass;
        }
        if (null !== $this->DBVersion) {
            $res['DBVersion'] = $this->DBVersion;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->instanceCount) {
            $res['InstanceCount'] = $this->instanceCount;
        }
        if (null !== $this->DBType) {
            $res['DBType'] = $this->DBType;
        }
        if (null !== $this->dedicatedHostGroupId) {
            $res['DedicatedHostGroupId'] = $this->dedicatedHostGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDedicatedInstanceDistributionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBClass'])) {
            $model->DBClass = $map['DBClass'];
        }
        if (isset($map['DBVersion'])) {
            $model->DBVersion = $map['DBVersion'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['InstanceCount'])) {
            $model->instanceCount = $map['InstanceCount'];
        }
        if (isset($map['DBType'])) {
            $model->DBType = $map['DBType'];
        }
        if (isset($map['DedicatedHostGroupId'])) {
            $model->dedicatedHostGroupId = $map['DedicatedHostGroupId'];
        }

        return $model;
    }
}
