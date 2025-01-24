<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\CreateCloudDriveServiceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateCloudDriveServiceResponseBody\conflictCdsAndOrder\conflictCds;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateCloudDriveServiceResponseBody\conflictCdsAndOrder\conflictOrder;

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
        if (\is_array($this->conflictCds)) {
            Model::validateArray($this->conflictCds);
        }
        if (\is_array($this->conflictOrder)) {
            Model::validateArray($this->conflictOrder);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->conflictCds) {
            if (\is_array($this->conflictCds)) {
                $res['ConflictCds'] = [];
                $n1                 = 0;
                foreach ($this->conflictCds as $item1) {
                    $res['ConflictCds'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->conflictOrder) {
            if (\is_array($this->conflictOrder)) {
                $res['ConflictOrder'] = [];
                $n1                   = 0;
                foreach ($this->conflictOrder as $item1) {
                    $res['ConflictOrder'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ConflictCds'])) {
            if (!empty($map['ConflictCds'])) {
                $model->conflictCds = [];
                $n1                 = 0;
                foreach ($map['ConflictCds'] as $item1) {
                    $model->conflictCds[$n1++] = conflictCds::fromMap($item1);
                }
            }
        }

        if (isset($map['ConflictOrder'])) {
            if (!empty($map['ConflictOrder'])) {
                $model->conflictOrder = [];
                $n1                   = 0;
                foreach ($map['ConflictOrder'] as $item1) {
                    $model->conflictOrder[$n1++] = conflictOrder::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
