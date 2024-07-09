<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribePriceRequest;

use AlibabaCloud\Tea\Model;

class bundleModels extends Model
{
    /**
     * @var int
     */
    public $amount;

    /**
     * @var string
     */
    public $bundleId;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $osType;

    /**
     * @var string
     */
    public $rootDiskId;

    /**
     * @var string
     */
    public $userDiskId;
    protected $_name = [
        'amount'       => 'Amount',
        'bundleId'     => 'BundleId',
        'duration'     => 'Duration',
        'instanceType' => 'InstanceType',
        'osType'       => 'OsType',
        'rootDiskId'   => 'RootDiskId',
        'userDiskId'   => 'UserDiskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }
        if (null !== $this->bundleId) {
            $res['BundleId'] = $this->bundleId;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->osType) {
            $res['OsType'] = $this->osType;
        }
        if (null !== $this->rootDiskId) {
            $res['RootDiskId'] = $this->rootDiskId;
        }
        if (null !== $this->userDiskId) {
            $res['UserDiskId'] = $this->userDiskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bundleModels
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }
        if (isset($map['BundleId'])) {
            $model->bundleId = $map['BundleId'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['OsType'])) {
            $model->osType = $map['OsType'];
        }
        if (isset($map['RootDiskId'])) {
            $model->rootDiskId = $map['RootDiskId'];
        }
        if (isset($map['UserDiskId'])) {
            $model->userDiskId = $map['UserDiskId'];
        }

        return $model;
    }
}
