<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetDeviceInfoResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetDeviceInfoResponseBody\data\recordList;

class data extends Model
{
    /**
     * @var string
     */
    public $deviceId;

    /**
     * @var string
     */
    public $deviceName;

    /**
     * @var string
     */
    public $firstTypeName;

    /**
     * @var recordList[]
     */
    public $recordList;

    /**
     * @var string
     */
    public $secondTypeName;
    protected $_name = [
        'deviceId' => 'deviceId',
        'deviceName' => 'deviceName',
        'firstTypeName' => 'firstTypeName',
        'recordList' => 'recordList',
        'secondTypeName' => 'secondTypeName',
    ];

    public function validate()
    {
        if (\is_array($this->recordList)) {
            Model::validateArray($this->recordList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deviceId) {
            $res['deviceId'] = $this->deviceId;
        }

        if (null !== $this->deviceName) {
            $res['deviceName'] = $this->deviceName;
        }

        if (null !== $this->firstTypeName) {
            $res['firstTypeName'] = $this->firstTypeName;
        }

        if (null !== $this->recordList) {
            if (\is_array($this->recordList)) {
                $res['recordList'] = [];
                $n1 = 0;
                foreach ($this->recordList as $item1) {
                    $res['recordList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->secondTypeName) {
            $res['secondTypeName'] = $this->secondTypeName;
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
        if (isset($map['deviceId'])) {
            $model->deviceId = $map['deviceId'];
        }

        if (isset($map['deviceName'])) {
            $model->deviceName = $map['deviceName'];
        }

        if (isset($map['firstTypeName'])) {
            $model->firstTypeName = $map['firstTypeName'];
        }

        if (isset($map['recordList'])) {
            if (!empty($map['recordList'])) {
                $model->recordList = [];
                $n1 = 0;
                foreach ($map['recordList'] as $item1) {
                    $model->recordList[$n1] = recordList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['secondTypeName'])) {
            $model->secondTypeName = $map['secondTypeName'];
        }

        return $model;
    }
}
