<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domainintl\V20171218\Models\LookupTmchNoticeResponseBody\claims\claim;

use AlibabaCloud\SDK\Domainintl\V20171218\Models\LookupTmchNoticeResponseBody\claims\claim\classDescs\classDesc;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->classDesc) {
            $res['ClassDesc'] = [];
            if (null !== $this->classDesc && \is_array($this->classDesc)) {
                $n = 0;
                foreach ($this->classDesc as $item) {
                    $res['ClassDesc'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return classDescs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClassDesc'])) {
            if (!empty($map['ClassDesc'])) {
                $model->classDesc = [];
                $n                = 0;
                foreach ($map['ClassDesc'] as $item) {
                    $model->classDesc[$n++] = null !== $item ? classDesc::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
