<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Marketing_event\V20210101\Models\FindGuestTicketRecordResponseBody\data\channelLevelInfo;

use AlibabaCloud\Dara\Model;

class levelThreeOwner extends Model
{
    /**
     * @var string
     */
    public $ownerEmpIdOrTelephone;

    /**
     * @var string
     */
    public $ownerName;

    /**
     * @var string
     */
    public $ownerNickName;
    protected $_name = [
        'ownerEmpIdOrTelephone' => 'OwnerEmpIdOrTelephone',
        'ownerName' => 'OwnerName',
        'ownerNickName' => 'OwnerNickName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ownerEmpIdOrTelephone) {
            $res['OwnerEmpIdOrTelephone'] = $this->ownerEmpIdOrTelephone;
        }

        if (null !== $this->ownerName) {
            $res['OwnerName'] = $this->ownerName;
        }

        if (null !== $this->ownerNickName) {
            $res['OwnerNickName'] = $this->ownerNickName;
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
        if (isset($map['OwnerEmpIdOrTelephone'])) {
            $model->ownerEmpIdOrTelephone = $map['OwnerEmpIdOrTelephone'];
        }

        if (isset($map['OwnerName'])) {
            $model->ownerName = $map['OwnerName'];
        }

        if (isset($map['OwnerNickName'])) {
            $model->ownerNickName = $map['OwnerNickName'];
        }

        return $model;
    }
}
