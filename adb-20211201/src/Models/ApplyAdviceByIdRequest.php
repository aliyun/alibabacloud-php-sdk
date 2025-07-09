<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;

class ApplyAdviceByIdRequest extends Model
{
    /**
     * @var int
     */
    public $adviceDate;

    /**
     * @var string
     */
    public $adviceId;

    /**
     * @var string
     */
    public $applyType;

    /**
     * @var bool
     */
    public $buildImmediately;

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
        'adviceId' => 'AdviceId',
        'applyType' => 'ApplyType',
        'buildImmediately' => 'BuildImmediately',
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

        if (null !== $this->adviceId) {
            $res['AdviceId'] = $this->adviceId;
        }

        if (null !== $this->applyType) {
            $res['ApplyType'] = $this->applyType;
        }

        if (null !== $this->buildImmediately) {
            $res['BuildImmediately'] = $this->buildImmediately;
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

        if (isset($map['AdviceId'])) {
            $model->adviceId = $map['AdviceId'];
        }

        if (isset($map['ApplyType'])) {
            $model->applyType = $map['ApplyType'];
        }

        if (isset($map['BuildImmediately'])) {
            $model->buildImmediately = $map['BuildImmediately'];
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
