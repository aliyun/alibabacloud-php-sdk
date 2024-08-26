<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Tea\Model;

class DeleteRegistrantProfileRequest extends Model
{
    /**
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @description This parameter is required.
     *
     * @example 3600000
     *
     * @var int
     */
    public $registrantProfileId;

    /**
     * @example 127.0.0.1
     *
     * @var string
     */
    public $userClientIp;
    protected $_name = [
        'lang'                => 'Lang',
        'registrantProfileId' => 'RegistrantProfileId',
        'userClientIp'        => 'UserClientIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->registrantProfileId) {
            $res['RegistrantProfileId'] = $this->registrantProfileId;
        }
        if (null !== $this->userClientIp) {
            $res['UserClientIp'] = $this->userClientIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteRegistrantProfileRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['RegistrantProfileId'])) {
            $model->registrantProfileId = $map['RegistrantProfileId'];
        }
        if (isset($map['UserClientIp'])) {
            $model->userClientIp = $map['UserClientIp'];
        }

        return $model;
    }
}
