<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models\MerchandisePlacementDetectionResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $boxCount;

    /**
     * @var data\data[]
     */
    public $data;

    /**
     * @var int[]
     */
    public $usageMap;
    protected $_name = [
        'boxCount' => 'BoxCount',
        'data' => 'Data',
        'usageMap' => 'UsageMap',
    ];

    public function validate()
    {
        if (\is_array($this->data)) {
            Model::validateArray($this->data);
        }
        if (\is_array($this->usageMap)) {
            Model::validateArray($this->usageMap);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->boxCount) {
            $res['BoxCount'] = $this->boxCount;
        }

        if (null !== $this->data) {
            if (\is_array($this->data)) {
                $res['Data'] = [];
                $n1 = 0;
                foreach ($this->data as $item1) {
                    $res['Data'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->usageMap) {
            if (\is_array($this->usageMap)) {
                $res['UsageMap'] = [];
                foreach ($this->usageMap as $key1 => $value1) {
                    $res['UsageMap'][$key1] = $value1;
                }
            }
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
        if (isset($map['BoxCount'])) {
            $model->boxCount = $map['BoxCount'];
        }

        if (isset($map['Data'])) {
            if (!empty($map['Data'])) {
                $model->data = [];
                $n1 = 0;
                foreach ($map['Data'] as $item1) {
                    $model->data[$n1] = data\data::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['UsageMap'])) {
            if (!empty($map['UsageMap'])) {
                $model->usageMap = [];
                foreach ($map['UsageMap'] as $key1 => $value1) {
                    $model->usageMap[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
