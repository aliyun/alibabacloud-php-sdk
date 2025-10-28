<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListSlbResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListSlbResponseBody\slbList\slbEntity;

class slbList extends Model
{
    /**
     * @var slbEntity[]
     */
    public $slbEntity;
    protected $_name = [
        'slbEntity' => 'SlbEntity',
    ];

    public function validate()
    {
        if (\is_array($this->slbEntity)) {
            Model::validateArray($this->slbEntity);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->slbEntity) {
            if (\is_array($this->slbEntity)) {
                $res['SlbEntity'] = [];
                $n1 = 0;
                foreach ($this->slbEntity as $item1) {
                    $res['SlbEntity'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SlbEntity'])) {
            if (!empty($map['SlbEntity'])) {
                $model->slbEntity = [];
                $n1 = 0;
                foreach ($map['SlbEntity'] as $item1) {
                    $model->slbEntity[$n1] = slbEntity::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
