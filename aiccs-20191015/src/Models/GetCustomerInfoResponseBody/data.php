<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\GetCustomerInfoResponseBody;

use AlibabaCloud\Dara\Model;

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
     * @var string
     */
    public $outerId;

    /**
     * @var string
     */
    public $photo;

    /**
     * @var string
     */
    public $realName;

    /**
     * @var int
     */
    public $userId;
    protected $_name = [
        'customizeFields' => 'CustomizeFields',
        'nick' => 'Nick',
        'outerId' => 'OuterId',
        'photo' => 'Photo',
        'realName' => 'RealName',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        if (\is_array($this->customizeFields)) {
            Model::validateArray($this->customizeFields);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customizeFields) {
            if (\is_array($this->customizeFields)) {
                $res['CustomizeFields'] = [];
                foreach ($this->customizeFields as $key1 => $value1) {
                    $res['CustomizeFields'][$key1] = $value1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomizeFields'])) {
            if (!empty($map['CustomizeFields'])) {
                $model->customizeFields = [];
                foreach ($map['CustomizeFields'] as $key1 => $value1) {
                    $model->customizeFields[$key1] = $value1;
                }
            }
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
