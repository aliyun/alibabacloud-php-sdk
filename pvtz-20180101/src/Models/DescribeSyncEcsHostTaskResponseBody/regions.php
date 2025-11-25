<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeSyncEcsHostTaskResponseBody;

use AlibabaCloud\Dara\Model;

class regions extends Model
{
    /**
     * @var string[]
     */
    public $regionId;
    protected $_name = [
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        if (\is_array($this->regionId)) {
            Model::validateArray($this->regionId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->regionId) {
            if (\is_array($this->regionId)) {
                $res['RegionId'] = [];
                $n1 = 0;
                foreach ($this->regionId as $item1) {
                    $res['RegionId'][$n1] = $item1;
                    ++$n1;
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
        if (isset($map['RegionId'])) {
            if (!empty($map['RegionId'])) {
                $model->regionId = [];
                $n1 = 0;
                foreach ($map['RegionId'] as $item1) {
                    $model->regionId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
