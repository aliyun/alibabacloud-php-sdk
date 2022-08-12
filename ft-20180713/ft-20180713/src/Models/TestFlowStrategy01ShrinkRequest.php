<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ft\V20180713\Models;

use AlibabaCloud\Tea\Model;

class TestFlowStrategy01ShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $namesShrink;
    protected $_name = [
        'namesShrink' => 'Names',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->namesShrink) {
            $res['Names'] = $this->namesShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TestFlowStrategy01ShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Names'])) {
            $model->namesShrink = $map['Names'];
        }

        return $model;
    }
}
