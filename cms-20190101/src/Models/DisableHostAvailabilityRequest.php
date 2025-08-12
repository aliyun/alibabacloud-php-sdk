<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Dara\Model;

class DisableHostAvailabilityRequest extends Model
{
    /**
     * @var int[]
     */
    public $id;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'id' => 'Id',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        if (\is_array($this->id)) {
            Model::validateArray($this->id);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->id) {
            if (\is_array($this->id)) {
                $res['Id'] = [];
                $n1 = 0;
                foreach ($this->id as $item1) {
                    $res['Id'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['Id'])) {
            if (!empty($map['Id'])) {
                $model->id = [];
                $n1 = 0;
                foreach ($map['Id'] as $item1) {
                    $model->id[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
