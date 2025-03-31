<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;

class ModifyApsJobRequest extends Model
{
    /**
     * @var string
     */
    public $apsJobId;

    /**
     * @var string
     */
    public $dbList;

    /**
     * @var string
     */
    public $partitionList;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'apsJobId' => 'ApsJobId',
        'dbList' => 'DbList',
        'partitionList' => 'PartitionList',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
