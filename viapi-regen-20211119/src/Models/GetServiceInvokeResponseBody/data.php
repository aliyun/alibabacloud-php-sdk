<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Viapiregen\V20211119\Models\GetServiceInvokeResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var mixed[]
     */
    public $userInvoke;
    protected $_name = [
        'userInvoke' => 'UserInvoke',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userInvoke) {
            $res['UserInvoke'] = $this->userInvoke;
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
        if (isset($map['UserInvoke'])) {
            $model->userInvoke = $map['UserInvoke'];
        }

        return $model;
    }
}
