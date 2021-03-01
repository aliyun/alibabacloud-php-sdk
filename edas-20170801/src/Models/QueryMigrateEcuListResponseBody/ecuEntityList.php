<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\QueryMigrateEcuListResponseBody;

use AlibabaCloud\SDK\Edas\V20170801\Models\QueryMigrateEcuListResponseBody\ecuEntityList\ecuEntity;
use AlibabaCloud\Tea\Model;

class ecuEntityList extends Model
{
    /**
     * @var ecuEntity[]
     */
    public $ecuEntity;
    protected $_name = [
        'ecuEntity' => 'EcuEntity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ecuEntity) {
            $res['EcuEntity'] = [];
            if (null !== $this->ecuEntity && \is_array($this->ecuEntity)) {
                $n = 0;
                foreach ($this->ecuEntity as $item) {
                    $res['EcuEntity'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ecuEntityList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EcuEntity'])) {
            if (!empty($map['EcuEntity'])) {
                $model->ecuEntity = [];
                $n                = 0;
                foreach ($map['EcuEntity'] as $item) {
                    $model->ecuEntity[$n++] = null !== $item ? ecuEntity::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
