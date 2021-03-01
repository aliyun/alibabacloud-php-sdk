<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListSlbResponseBody;

use AlibabaCloud\SDK\Edas\V20170801\Models\ListSlbResponseBody\slbList\slbEntity;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->slbEntity) {
            $res['SlbEntity'] = [];
            if (null !== $this->slbEntity && \is_array($this->slbEntity)) {
                $n = 0;
                foreach ($this->slbEntity as $item) {
                    $res['SlbEntity'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return slbList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SlbEntity'])) {
            if (!empty($map['SlbEntity'])) {
                $model->slbEntity = [];
                $n                = 0;
                foreach ($map['SlbEntity'] as $item) {
                    $model->slbEntity[$n++] = null !== $item ? slbEntity::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
