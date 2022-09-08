<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetAligenieUserInfoResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $aligenieNickname;

    /**
     * @var string
     */
    public $avatar;

    /**
     * @var bool
     */
    public $deletable;
    protected $_name = [
        'aligenieNickname' => 'AligenieNickname',
        'avatar'           => 'Avatar',
        'deletable'        => 'Deletable',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aligenieNickname) {
            $res['AligenieNickname'] = $this->aligenieNickname;
        }
        if (null !== $this->avatar) {
            $res['Avatar'] = $this->avatar;
        }
        if (null !== $this->deletable) {
            $res['Deletable'] = $this->deletable;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AligenieNickname'])) {
            $model->aligenieNickname = $map['AligenieNickname'];
        }
        if (isset($map['Avatar'])) {
            $model->avatar = $map['Avatar'];
        }
        if (isset($map['Deletable'])) {
            $model->deletable = $map['Deletable'];
        }

        return $model;
    }
}
