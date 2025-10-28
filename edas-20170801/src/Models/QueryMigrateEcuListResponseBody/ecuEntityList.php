<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\QueryMigrateEcuListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edas\V20170801\Models\QueryMigrateEcuListResponseBody\ecuEntityList\ecuEntity;

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
        if (\is_array($this->ecuEntity)) {
            Model::validateArray($this->ecuEntity);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ecuEntity) {
            if (\is_array($this->ecuEntity)) {
                $res['EcuEntity'] = [];
                $n1 = 0;
                foreach ($this->ecuEntity as $item1) {
                    $res['EcuEntity'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['EcuEntity'])) {
            if (!empty($map['EcuEntity'])) {
                $model->ecuEntity = [];
                $n1 = 0;
                foreach ($map['EcuEntity'] as $item1) {
                    $model->ecuEntity[$n1] = ecuEntity::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
