<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeSpecResponseBody;

use AlibabaCloud\Tea\Model;

class specInfoModel extends Model
{
    /**
     * @description Number of CPU cores.
     *
     * @example 8
     *
     * @var int
     */
    public $core;

    /**
     * @description The maximum number of cloud phone instances.
     *
     * @example 40
     *
     * @var string
     */
    public $maxPhoneCount;

    /**
     * @description Memory size.
     *
     * @example 16
     *
     * @var int
     */
    public $memory;

    /**
     * @description The minimum number of cloud phone instances.
     *
     * @example 4
     *
     * @var string
     */
    public $minPhoneCount;

    /**
     * @example 2
     *
     * @var string
     */
    public $phoneCount;

    /**
     * @example 1920*1080
     *
     * @var string
     */
    public $resolution;

    /**
     * @description Specification ID.
     *
     * @example acp.basic.small
     *
     * @var string
     */
    public $specId;

    /**
     * @description Specification status.
     *
     * @example Available
     *
     * @var string
     */
    public $specStatus;

    /**
     * @description Specification type.
     *
     * @example ARM
     *
     * @var string
     */
    public $specType;

    /**
     * @description System disk size, in GB.
     *
     * @example 32
     *
     * @var int
     */
    public $systemDiskSize;
    protected $_name = [
        'core' => 'Core',
        'maxPhoneCount' => 'MaxPhoneCount',
        'memory' => 'Memory',
        'minPhoneCount' => 'MinPhoneCount',
        'phoneCount' => 'PhoneCount',
        'resolution' => 'Resolution',
        'specId' => 'SpecId',
        'specStatus' => 'SpecStatus',
        'specType' => 'SpecType',
        'systemDiskSize' => 'SystemDiskSize',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->core) {
            $res['Core'] = $this->core;
        }
        if (null !== $this->maxPhoneCount) {
            $res['MaxPhoneCount'] = $this->maxPhoneCount;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }
        if (null !== $this->minPhoneCount) {
            $res['MinPhoneCount'] = $this->minPhoneCount;
        }
        if (null !== $this->phoneCount) {
            $res['PhoneCount'] = $this->phoneCount;
        }
        if (null !== $this->resolution) {
            $res['Resolution'] = $this->resolution;
        }
        if (null !== $this->specId) {
            $res['SpecId'] = $this->specId;
        }
        if (null !== $this->specStatus) {
            $res['SpecStatus'] = $this->specStatus;
        }
        if (null !== $this->specType) {
            $res['SpecType'] = $this->specType;
        }
        if (null !== $this->systemDiskSize) {
            $res['SystemDiskSize'] = $this->systemDiskSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return specInfoModel
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Core'])) {
            $model->core = $map['Core'];
        }
        if (isset($map['MaxPhoneCount'])) {
            $model->maxPhoneCount = $map['MaxPhoneCount'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }
        if (isset($map['MinPhoneCount'])) {
            $model->minPhoneCount = $map['MinPhoneCount'];
        }
        if (isset($map['PhoneCount'])) {
            $model->phoneCount = $map['PhoneCount'];
        }
        if (isset($map['Resolution'])) {
            $model->resolution = $map['Resolution'];
        }
        if (isset($map['SpecId'])) {
            $model->specId = $map['SpecId'];
        }
        if (isset($map['SpecStatus'])) {
            $model->specStatus = $map['SpecStatus'];
        }
        if (isset($map['SpecType'])) {
            $model->specType = $map['SpecType'];
        }
        if (isset($map['SystemDiskSize'])) {
            $model->systemDiskSize = $map['SystemDiskSize'];
        }

        return $model;
    }
}
