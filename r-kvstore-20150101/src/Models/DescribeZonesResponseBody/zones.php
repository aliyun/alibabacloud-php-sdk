<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeZonesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeZonesResponseBody\zones\KVStoreZone;

class zones extends Model
{
    /**
     * @var KVStoreZone[]
     */
    public $KVStoreZone;
    protected $_name = [
        'KVStoreZone' => 'KVStoreZone',
    ];

    public function validate()
    {
        if (\is_array($this->KVStoreZone)) {
            Model::validateArray($this->KVStoreZone);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->KVStoreZone) {
            if (\is_array($this->KVStoreZone)) {
                $res['KVStoreZone'] = [];
                $n1 = 0;
                foreach ($this->KVStoreZone as $item1) {
                    $res['KVStoreZone'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['KVStoreZone'])) {
            if (!empty($map['KVStoreZone'])) {
                $model->KVStoreZone = [];
                $n1 = 0;
                foreach ($map['KVStoreZone'] as $item1) {
                    $model->KVStoreZone[$n1++] = KVStoreZone::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
