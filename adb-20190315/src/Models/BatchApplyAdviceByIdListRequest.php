<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\Dara\Model;

class BatchApplyAdviceByIdListRequest extends Model
{
    /**
     * @var int
     */
    public $adviceDate;

    /**
     * @var string
     */
    public $adviceIdList;

    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'adviceDate' => 'AdviceDate',
        'adviceIdList' => 'AdviceIdList',
        'DBClusterId' => 'DBClusterId',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->adviceDate) {
            $res['AdviceDate'] = $this->adviceDate;
        }

        if (null !== $this->adviceIdList) {
            $res['AdviceIdList'] = $this->adviceIdList;
        }

        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
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
        if (isset($map['AdviceDate'])) {
            $model->adviceDate = $map['AdviceDate'];
        }

        if (isset($map['AdviceIdList'])) {
            $model->adviceIdList = $map['AdviceIdList'];
        }

        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
