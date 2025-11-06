<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models\LookupTmchNoticeResponseBody\claims\claim;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Domain\V20180129\Models\LookupTmchNoticeResponseBody\claims\claim\classDescs\classDesc;

class classDescs extends Model
{
    /**
     * @var classDesc[]
     */
    public $classDesc;
    protected $_name = [
        'classDesc' => 'ClassDesc',
    ];

    public function validate()
    {
        if (\is_array($this->classDesc)) {
            Model::validateArray($this->classDesc);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->classDesc) {
            if (\is_array($this->classDesc)) {
                $res['ClassDesc'] = [];
                $n1 = 0;
                foreach ($this->classDesc as $item1) {
                    $res['ClassDesc'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ClassDesc'])) {
            if (!empty($map['ClassDesc'])) {
                $model->classDesc = [];
                $n1 = 0;
                foreach ($map['ClassDesc'] as $item1) {
                    $model->classDesc[$n1] = classDesc::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
