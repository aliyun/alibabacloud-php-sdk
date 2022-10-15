<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avatar\V20220130\Models\StartInstanceRequest;

use AlibabaCloud\Tea\Model;

class commandRequest extends Model
{
    /**
     * @var bool
     */
    public $alphaSwitch;
    protected $_name = [
        'alphaSwitch' => 'AlphaSwitch',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alphaSwitch) {
            $res['AlphaSwitch'] = $this->alphaSwitch;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return commandRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlphaSwitch'])) {
            $model->alphaSwitch = $map['AlphaSwitch'];
        }

        return $model;
    }
}
