<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnServiceResponseBody;

use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnServiceResponseBody\operationLocks\lockReason;
use AlibabaCloud\Tea\Model;

class operationLocks extends Model
{
    /**
     * @var lockReason[]
     */
    public $lockReason;
    protected $_name = [
        'lockReason' => 'LockReason',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lockReason) {
            $res['LockReason'] = [];
            if (null !== $this->lockReason && \is_array($this->lockReason)) {
                $n = 0;
                foreach ($this->lockReason as $item) {
                    $res['LockReason'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return operationLocks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LockReason'])) {
            if (!empty($map['LockReason'])) {
                $model->lockReason = [];
                $n                 = 0;
                foreach ($map['LockReason'] as $item) {
                    $model->lockReason[$n++] = null !== $item ? lockReason::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
