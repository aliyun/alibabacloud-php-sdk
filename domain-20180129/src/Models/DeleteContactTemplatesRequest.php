<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Tea\Model;

class DeleteContactTemplatesRequest extends Model
{
    /**
     * @var string
     */
    public $registrantProfileIds;

    /**
     * @var string
     */
    public $userClientIp;
    protected $_name = [
        'registrantProfileIds' => 'RegistrantProfileIds',
        'userClientIp'         => 'UserClientIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->registrantProfileIds) {
            $res['RegistrantProfileIds'] = $this->registrantProfileIds;
        }
        if (null !== $this->userClientIp) {
            $res['UserClientIp'] = $this->userClientIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteContactTemplatesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegistrantProfileIds'])) {
            $model->registrantProfileIds = $map['RegistrantProfileIds'];
        }
        if (isset($map['UserClientIp'])) {
            $model->userClientIp = $map['UserClientIp'];
        }

        return $model;
    }
}
