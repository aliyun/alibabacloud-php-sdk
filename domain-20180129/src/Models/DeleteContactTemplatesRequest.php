<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Dara\Model;

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
        'userClientIp' => 'UserClientIp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
