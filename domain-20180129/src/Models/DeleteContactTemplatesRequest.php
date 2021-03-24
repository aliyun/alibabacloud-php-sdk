<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Tea\Model;

class DeleteContactTemplatesRequest extends Model
{
    /**
     * @var string
     */
    public $userClientIp;

    /**
     * @var string
     */
    public $registrantProfileIds;
    protected $_name = [
        'userClientIp'         => 'UserClientIp',
        'registrantProfileIds' => 'RegistrantProfileIds',
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
        if (null !== $this->registrantProfileIds) {
            $res['RegistrantProfileIds'] = $this->registrantProfileIds;
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
        if (isset($map['UserClientIp'])) {
            $model->userClientIp = $map['UserClientIp'];
        }
        if (isset($map['RegistrantProfileIds'])) {
            $model->registrantProfileIds = $map['RegistrantProfileIds'];
        }

        return $model;
    }
}
