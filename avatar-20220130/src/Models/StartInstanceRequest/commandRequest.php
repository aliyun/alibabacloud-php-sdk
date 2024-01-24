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

    /**
     * @var string
     */
    public $backGroundImageUrl;

    /**
     * @var int
     */
    public $locate;
    protected $_name = [
        'alphaSwitch'        => 'AlphaSwitch',
        'backGroundImageUrl' => 'BackGroundImageUrl',
        'locate'             => 'Locate',
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
        if (null !== $this->backGroundImageUrl) {
            $res['BackGroundImageUrl'] = $this->backGroundImageUrl;
        }
        if (null !== $this->locate) {
            $res['Locate'] = $this->locate;
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
        if (isset($map['BackGroundImageUrl'])) {
            $model->backGroundImageUrl = $map['BackGroundImageUrl'];
        }
        if (isset($map['Locate'])) {
            $model->locate = $map['Locate'];
        }

        return $model;
    }
}
