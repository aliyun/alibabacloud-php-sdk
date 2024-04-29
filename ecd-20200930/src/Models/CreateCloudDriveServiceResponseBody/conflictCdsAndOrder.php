<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\CreateCloudDriveServiceResponseBody;

use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateCloudDriveServiceResponseBody\conflictCdsAndOrder\conflictCds;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateCloudDriveServiceResponseBody\conflictCdsAndOrder\conflictOrder;
use AlibabaCloud\Tea\Model;

class conflictCdsAndOrder extends Model
{
    /**
     * @var conflictCds[]
     */
    public $conflictCds;

    /**
     * @var conflictOrder[]
     */
    public $conflictOrder;
    protected $_name = [
        'conflictCds'   => 'ConflictCds',
        'conflictOrder' => 'ConflictOrder',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->conflictCds) {
            $res['ConflictCds'] = [];
            if (null !== $this->conflictCds && \is_array($this->conflictCds)) {
                $n = 0;
                foreach ($this->conflictCds as $item) {
                    $res['ConflictCds'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->conflictOrder) {
            $res['ConflictOrder'] = [];
            if (null !== $this->conflictOrder && \is_array($this->conflictOrder)) {
                $n = 0;
                foreach ($this->conflictOrder as $item) {
                    $res['ConflictOrder'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return conflictCdsAndOrder
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConflictCds'])) {
            if (!empty($map['ConflictCds'])) {
                $model->conflictCds = [];
                $n                  = 0;
                foreach ($map['ConflictCds'] as $item) {
                    $model->conflictCds[$n++] = null !== $item ? conflictCds::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ConflictOrder'])) {
            if (!empty($map['ConflictOrder'])) {
                $model->conflictOrder = [];
                $n                    = 0;
                foreach ($map['ConflictOrder'] as $item) {
                    $model->conflictOrder[$n++] = null !== $item ? conflictOrder::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
