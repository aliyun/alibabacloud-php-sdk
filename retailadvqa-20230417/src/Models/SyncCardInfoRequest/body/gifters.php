<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailadvqa\V20230417\Models\SyncCardInfoRequest\body;

use AlibabaCloud\Tea\Model;

class gifters extends Model
{
    /**
     * @example https://xxx/2.jpg
     *
     * @var string
     */
    public $headerImg;

    /**
     * @example 1000030820003
     *
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $nickname;

    /**
     * @description openId
     *
     * @example 82ace612cd377134d597e32e91562caf
     *
     * @var string
     */
    public $openId;

    /**
     * @example 13277778888
     *
     * @var string
     */
    public $phone;
    protected $_name = [
        'headerImg' => 'HeaderImg',
        'id'        => 'Id',
        'nickname'  => 'Nickname',
        'openId'    => 'OpenId',
        'phone'     => 'Phone',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->headerImg) {
            $res['HeaderImg'] = $this->headerImg;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->nickname) {
            $res['Nickname'] = $this->nickname;
        }
        if (null !== $this->openId) {
            $res['OpenId'] = $this->openId;
        }
        if (null !== $this->phone) {
            $res['Phone'] = $this->phone;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return gifters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HeaderImg'])) {
            $model->headerImg = $map['HeaderImg'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Nickname'])) {
            $model->nickname = $map['Nickname'];
        }
        if (isset($map['OpenId'])) {
            $model->openId = $map['OpenId'];
        }
        if (isset($map['Phone'])) {
            $model->phone = $map['Phone'];
        }

        return $model;
    }
}
