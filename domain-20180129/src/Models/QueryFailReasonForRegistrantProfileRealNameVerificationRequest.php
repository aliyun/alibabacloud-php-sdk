<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Tea\Model;

class QueryFailReasonForRegistrantProfileRealNameVerificationRequest extends Model
{
    /**
     * @var string
     */
    public $userClientIp;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $registrantProfileID;
    protected $_name = [
        'userClientIp'        => 'UserClientIp',
        'lang'                => 'Lang',
        'registrantProfileID' => 'RegistrantProfileID',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userClientIp) {
            $res['UserClientIp'] = $this->userClientIp;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->registrantProfileID) {
            $res['RegistrantProfileID'] = $this->registrantProfileID;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryFailReasonForRegistrantProfileRealNameVerificationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserClientIp'])) {
            $model->userClientIp = $map['UserClientIp'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['RegistrantProfileID'])) {
            $model->registrantProfileID = $map['RegistrantProfileID'];
        }

        return $model;
    }
}
