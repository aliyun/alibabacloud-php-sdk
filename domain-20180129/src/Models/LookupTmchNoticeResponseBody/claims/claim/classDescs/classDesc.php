<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models\LookupTmchNoticeResponseBody\claims\claim\classDescs;

use AlibabaCloud\Tea\Model;

class classDesc extends Model
{
    /**
     * @var int
     */
    public $classNum;

    /**
     * @var string
     */
    public $desc;
    protected $_name = [
        'classNum' => 'ClassNum',
        'desc'     => 'Desc',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->classNum) {
            $res['ClassNum'] = $this->classNum;
        }
        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return classDesc
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClassNum'])) {
            $model->classNum = $map['ClassNum'];
        }
        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }

        return $model;
    }
}
