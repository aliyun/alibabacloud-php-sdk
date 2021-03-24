<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Tea\Model;

class SetDefaultRegistrantProfileRequest extends Model
{
    /**
     * @var string
     */
    public $userClientIp;

    /**
     * @var int
     */
    public $registrantProfileId;
    protected $_name = [
        'userClientIp'        => 'UserClientIp',
        'registrantProfileId' => 'RegistrantProfileId',
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
        if (null !== $this->registrantProfileId) {
            $res['RegistrantProfileId'] = $this->registrantProfileId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetDefaultRegistrantProfileRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserClientIp'])) {
            $model->userClientIp = $map['UserClientIp'];
        }
        if (isset($map['RegistrantProfileId'])) {
            $model->registrantProfileId = $map['RegistrantProfileId'];
        }

        return $model;
    }
}
