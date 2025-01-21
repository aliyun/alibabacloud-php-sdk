<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;

class DeleteAppListRequest extends Model
{
    /**
     * @var string[]
     */
    public $pids;
    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'pids'     => 'Pids',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        if (\is_array($this->pids)) {
            Model::validateArray($this->pids);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pids) {
            if (\is_array($this->pids)) {
                $res['Pids'] = [];
                $n1          = 0;
                foreach ($this->pids as $item1) {
                    $res['Pids'][$n1++] = $item1;
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
        if (isset($map['Pids'])) {
            if (!empty($map['Pids'])) {
                $model->pids = [];
                $n1          = 0;
                foreach ($map['Pids'] as $item1) {
                    $model->pids[$n1++] = $item1;
                }
            }
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
