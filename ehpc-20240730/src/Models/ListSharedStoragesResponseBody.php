<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20240730\Models\ListSharedStoragesResponseBody\sharedStorages;

class ListSharedStoragesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var sharedStorages[]
     */
    public $sharedStorages;

    /**
     * @var string
     */
    public $success;
    protected $_name = [
        'requestId' => 'RequestId',
        'sharedStorages' => 'SharedStorages',
        'success' => 'Success',
    ];

    public function validate()
    {
        if (\is_array($this->sharedStorages)) {
            Model::validateArray($this->sharedStorages);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->sharedStorages) {
            if (\is_array($this->sharedStorages)) {
                $res['SharedStorages'] = [];
                $n1 = 0;
                foreach ($this->sharedStorages as $item1) {
                    $res['SharedStorages'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SharedStorages'])) {
            if (!empty($map['SharedStorages'])) {
                $model->sharedStorages = [];
                $n1 = 0;
                foreach ($map['SharedStorages'] as $item1) {
                    $model->sharedStorages[$n1] = sharedStorages::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
