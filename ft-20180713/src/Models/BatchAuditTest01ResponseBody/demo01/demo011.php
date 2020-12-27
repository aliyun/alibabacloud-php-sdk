<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ft\V20180713\Models\BatchAuditTest01ResponseBody\demo01;

use AlibabaCloud\Tea\Model;

class demo011 extends Model
{
    /**
     * @var string
     */
    public $demo0111;
    protected $_name = [
        'demo0111' => 'Demo0111',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->demo0111) {
            $res['Demo0111'] = $this->demo0111;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return demo011
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Demo0111'])) {
            $model->demo0111 = $map['Demo0111'];
        }

        return $model;
    }
}
