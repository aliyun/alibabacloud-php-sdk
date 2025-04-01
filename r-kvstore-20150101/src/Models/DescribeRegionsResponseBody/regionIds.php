<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeRegionsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeRegionsResponseBody\regionIds\KVStoreRegion;

class regionIds extends Model
{
    /**
     * @var KVStoreRegion[]
     */
    public $KVStoreRegion;
    protected $_name = [
        'KVStoreRegion' => 'KVStoreRegion',
    ];

    public function validate()
    {
        if (\is_array($this->KVStoreRegion)) {
            Model::validateArray($this->KVStoreRegion);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->KVStoreRegion) {
            if (\is_array($this->KVStoreRegion)) {
                $res['KVStoreRegion'] = [];
                $n1 = 0;
                foreach ($this->KVStoreRegion as $item1) {
                    $res['KVStoreRegion'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['KVStoreRegion'])) {
            if (!empty($map['KVStoreRegion'])) {
                $model->KVStoreRegion = [];
                $n1 = 0;
                foreach ($map['KVStoreRegion'] as $item1) {
                    $model->KVStoreRegion[$n1++] = KVStoreRegion::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
