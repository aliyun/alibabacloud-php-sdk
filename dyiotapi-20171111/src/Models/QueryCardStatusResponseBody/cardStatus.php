<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyiotapi\V20171111\Models\QueryCardStatusResponseBody;

use AlibabaCloud\Tea\Model;

class cardStatus extends Model
{
    /**
     * @var string
     */
    public $msisdn;

    /**
     * @var string
     */
    public $userStatus;

    /**
     * @var string
     */
    public $iccid;
    protected $_name = [
        'msisdn'     => 'Msisdn',
        'userStatus' => 'UserStatus',
        'iccid'      => 'Iccid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->msisdn) {
            $res['Msisdn'] = $this->msisdn;
        }
        if (null !== $this->userStatus) {
            $res['UserStatus'] = $this->userStatus;
        }
        if (null !== $this->iccid) {
            $res['Iccid'] = $this->iccid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cardStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Msisdn'])) {
            $model->msisdn = $map['Msisdn'];
        }
        if (isset($map['UserStatus'])) {
            $model->userStatus = $map['UserStatus'];
        }
        if (isset($map['Iccid'])) {
            $model->iccid = $map['Iccid'];
        }

        return $model;
    }
}
