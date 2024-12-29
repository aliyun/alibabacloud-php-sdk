<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Tea\Model;

class ModifyApsJobRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example aps-bj1xxxxxx
     *
     * @var string
     */
    public $apsJobId;

    /**
     * @description This parameter is required.
     *
     * @example {"EntireInstance":true}
     *
     * @var string
     */
    public $dbList;

    /**
     * @example {}
     *
     * @var string
     */
    public $partitionList;

    /**
     * @description This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'apsJobId'      => 'ApsJobId',
        'dbList'        => 'DbList',
        'partitionList' => 'PartitionList',
        'regionId'      => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apsJobId) {
            $res['ApsJobId'] = $this->apsJobId;
        }
        if (null !== $this->dbList) {
            $res['DbList'] = $this->dbList;
        }
        if (null !== $this->partitionList) {
            $res['PartitionList'] = $this->partitionList;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyApsJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApsJobId'])) {
            $model->apsJobId = $map['ApsJobId'];
        }
        if (isset($map['DbList'])) {
            $model->dbList = $map['DbList'];
        }
        if (isset($map['PartitionList'])) {
            $model->partitionList = $map['PartitionList'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
