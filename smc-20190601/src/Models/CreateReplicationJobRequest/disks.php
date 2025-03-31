<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smc\V20190601\Models\CreateReplicationJobRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Smc\V20190601\Models\CreateReplicationJobRequest\disks\data;
use AlibabaCloud\SDK\Smc\V20190601\Models\CreateReplicationJobRequest\disks\system;

class disks extends Model
{
    /**
     * @var data[]
     */
    public $data;

    /**
     * @var system
     */
    public $system;
    protected $_name = [
        'data' => 'Data',
        'system' => 'System',
    ];

    public function validate()
    {
        if (\is_array($this->data)) {
            Model::validateArray($this->data);
        }
        if (null !== $this->system) {
            $this->system->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->data) {
            if (\is_array($this->data)) {
                $res['Data'] = [];
                $n1 = 0;
                foreach ($this->data as $item1) {
                    $res['Data'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->system) {
            $res['System'] = null !== $this->system ? $this->system->toArray($noStream) : $this->system;
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
        if (isset($map['Data'])) {
            if (!empty($map['Data'])) {
                $model->data = [];
                $n1 = 0;
                foreach ($map['Data'] as $item1) {
                    $model->data[$n1++] = data::fromMap($item1);
                }
            }
        }

        if (isset($map['System'])) {
            $model->system = system::fromMap($map['System']);
        }

        return $model;
    }
}
