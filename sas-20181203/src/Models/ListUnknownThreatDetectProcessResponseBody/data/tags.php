<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListUnknownThreatDetectProcessResponseBody\data;

use AlibabaCloud\Dara\Model;

class tags extends Model
{
    /**
     * @var string
     */
    public $tagEn;

    /**
     * @var string
     */
    public $tagZh;
    protected $_name = [
        'tagEn' => 'TagEn',
        'tagZh' => 'TagZh',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->tagEn) {
            $res['TagEn'] = $this->tagEn;
        }

        if (null !== $this->tagZh) {
            $res['TagZh'] = $this->tagZh;
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
        if (isset($map['TagEn'])) {
            $model->tagEn = $map['TagEn'];
        }

        if (isset($map['TagZh'])) {
            $model->tagZh = $map['TagZh'];
        }

        return $model;
    }
}
