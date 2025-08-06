<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetStorageListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetStorageListResponseBody\storageList\storage;

class storageList extends Model
{
    /**
     * @var storage[]
     */
    public $storage;
    protected $_name = [
        'storage' => 'Storage',
    ];

    public function validate()
    {
        if (\is_array($this->storage)) {
            Model::validateArray($this->storage);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->storage) {
            if (\is_array($this->storage)) {
                $res['Storage'] = [];
                $n1 = 0;
                foreach ($this->storage as $item1) {
                    $res['Storage'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Storage'])) {
            if (!empty($map['Storage'])) {
                $model->storage = [];
                $n1 = 0;
                foreach ($map['Storage'] as $item1) {
                    $model->storage[$n1] = storage::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
