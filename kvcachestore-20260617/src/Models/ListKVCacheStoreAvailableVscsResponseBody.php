<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kvcachestore\V20260617\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Kvcachestore\V20260617\Models\ListKVCacheStoreAvailableVscsResponseBody\vscs;

class ListKVCacheStoreAvailableVscsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var vscs[]
     */
    public $vscs;
    protected $_name = [
        'requestId' => 'RequestId',
        'vscs' => 'Vscs',
    ];

    public function validate()
    {
        if (\is_array($this->vscs)) {
            Model::validateArray($this->vscs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->vscs) {
            if (\is_array($this->vscs)) {
                $res['Vscs'] = [];
                $n1 = 0;
                foreach ($this->vscs as $item1) {
                    $res['Vscs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Vscs'])) {
            if (!empty($map['Vscs'])) {
                $model->vscs = [];
                $n1 = 0;
                foreach ($map['Vscs'] as $item1) {
                    $model->vscs[$n1] = vscs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
