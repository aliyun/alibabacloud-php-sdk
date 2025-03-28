<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models\CreateEssOptJobRequest;

use AlibabaCloud\Dara\Model;

class systemData extends Model
{
    /**
     * @var mixed[][]
     */
    public $historyData;

    /**
     * @var string
     */
    public $systemId;

    /**
     * @var mixed[]
     */
    public $systemParams;

    /**
     * @var string
     */
    public $systemType;
    protected $_name = [
        'historyData' => 'HistoryData',
        'systemId' => 'SystemId',
        'systemParams' => 'SystemParams',
        'systemType' => 'SystemType',
    ];

    public function validate()
    {
        if (\is_array($this->historyData)) {
            Model::validateArray($this->historyData);
        }
        if (\is_array($this->systemParams)) {
            Model::validateArray($this->systemParams);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->historyData) {
            if (\is_array($this->historyData)) {
                $res['HistoryData'] = [];
                $n1 = 0;
                foreach ($this->historyData as $item1) {
                    if (\is_array($item1)) {
                        $res['HistoryData'][$n1++] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['HistoryData'][$n1++][$key2] = $value2;
                        }
                    }
                }
            }
        }

        if (null !== $this->systemId) {
            $res['SystemId'] = $this->systemId;
        }

        if (null !== $this->systemParams) {
            if (\is_array($this->systemParams)) {
                $res['SystemParams'] = [];
                foreach ($this->systemParams as $key1 => $value1) {
                    $res['SystemParams'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->systemType) {
            $res['SystemType'] = $this->systemType;
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
        if (isset($map['HistoryData'])) {
            if (!empty($map['HistoryData'])) {
                $model->historyData = [];
                $n1 = 0;
                foreach ($map['HistoryData'] as $item1) {
                    if (!empty($item1)) {
                        $model->historyData[$n1++] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->historyData[$n1++][$key2] = $value2;
                        }
                    }
                }
            }
        }

        if (isset($map['SystemId'])) {
            $model->systemId = $map['SystemId'];
        }

        if (isset($map['SystemParams'])) {
            if (!empty($map['SystemParams'])) {
                $model->systemParams = [];
                foreach ($map['SystemParams'] as $key1 => $value1) {
                    $model->systemParams[$key1] = $value1;
                }
            }
        }

        if (isset($map['SystemType'])) {
            $model->systemType = $map['SystemType'];
        }

        return $model;
    }
}
