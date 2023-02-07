<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\GetCustomerInfoResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var mixed[]
     */
    public $customizeFields;

    /**
     * @var string
     */
    public $nick;

    /**
     * @example 6666666
     *
     * @var string
     */
    public $outerId;

    /**
     * @example https://thirdwx.qlogo.cn/mmopen/vi_32/Q0j4TwGTfTLSW7XPFlJDwVunXP8pr84TvltwtLlNqTlOVSFeM3bCgn57mAB4JuZZmvMW0qicqW0PyzyUdZpxiaFQ
     *
     * @var string
     */
    public $photo;

    /**
     * @var string
     */
    public $realName;

    /**
     * @example 823456789023
     *
     * @var int
     */
    public $userId;
    protected $_name = [
        'customizeFields' => 'CustomizeFields',
        'nick'            => 'Nick',
        'outerId'         => 'OuterId',
        'photo'           => 'Photo',
        'realName'        => 'RealName',
        'userId'          => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customizeFields) {
            $res['CustomizeFields'] = $this->customizeFields;
        }
        if (null !== $this->nick) {
            $res['Nick'] = $this->nick;
        }
        if (null !== $this->outerId) {
            $res['OuterId'] = $this->outerId;
        }
        if (null !== $this->photo) {
            $res['Photo'] = $this->photo;
        }
        if (null !== $this->realName) {
            $res['RealName'] = $this->realName;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomizeFields'])) {
            $model->customizeFields = $map['CustomizeFields'];
        }
        if (isset($map['Nick'])) {
            $model->nick = $map['Nick'];
        }
        if (isset($map['OuterId'])) {
            $model->outerId = $map['OuterId'];
        }
        if (isset($map['Photo'])) {
            $model->photo = $map['Photo'];
        }
        if (isset($map['RealName'])) {
            $model->realName = $map['RealName'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
