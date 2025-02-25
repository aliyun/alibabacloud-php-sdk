<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emasappmonitor\V20190611\Models;

use AlibabaCloud\Dara\Model;

class SampleBase extends Model
{
    /**
     * @var FullSampleItem[]
     */
    public $fullSampleDeviceIds;
    /**
     * @var FullSampleItem[]
     */
    public $fullSampleUsers;
    /**
     * @var string
     */
    public $sampleMethod;
    /**
     * @var float
     */
    public $sampleRate;
    protected $_name = [
        'fullSampleDeviceIds' => 'FullSampleDeviceIds',
        'fullSampleUsers'     => 'FullSampleUsers',
        'sampleMethod'        => 'SampleMethod',
        'sampleRate'          => 'SampleRate',
    ];

    public function validate()
    {
        if (\is_array($this->fullSampleDeviceIds)) {
            Model::validateArray($this->fullSampleDeviceIds);
        }
        if (\is_array($this->fullSampleUsers)) {
            Model::validateArray($this->fullSampleUsers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fullSampleDeviceIds) {
            if (\is_array($this->fullSampleDeviceIds)) {
                $res['FullSampleDeviceIds'] = [];
                $n1                         = 0;
                foreach ($this->fullSampleDeviceIds as $item1) {
                    $res['FullSampleDeviceIds'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->fullSampleUsers) {
            if (\is_array($this->fullSampleUsers)) {
                $res['FullSampleUsers'] = [];
                $n1                     = 0;
                foreach ($this->fullSampleUsers as $item1) {
                    $res['FullSampleUsers'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->sampleMethod) {
            $res['SampleMethod'] = $this->sampleMethod;
        }

        if (null !== $this->sampleRate) {
            $res['SampleRate'] = $this->sampleRate;
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
        if (isset($map['FullSampleDeviceIds'])) {
            if (!empty($map['FullSampleDeviceIds'])) {
                $model->fullSampleDeviceIds = [];
                $n1                         = 0;
                foreach ($map['FullSampleDeviceIds'] as $item1) {
                    $model->fullSampleDeviceIds[$n1++] = FullSampleItem::fromMap($item1);
                }
            }
        }

        if (isset($map['FullSampleUsers'])) {
            if (!empty($map['FullSampleUsers'])) {
                $model->fullSampleUsers = [];
                $n1                     = 0;
                foreach ($map['FullSampleUsers'] as $item1) {
                    $model->fullSampleUsers[$n1++] = FullSampleItem::fromMap($item1);
                }
            }
        }

        if (isset($map['SampleMethod'])) {
            $model->sampleMethod = $map['SampleMethod'];
        }

        if (isset($map['SampleRate'])) {
            $model->sampleRate = $map['SampleRate'];
        }

        return $model;
    }
}
