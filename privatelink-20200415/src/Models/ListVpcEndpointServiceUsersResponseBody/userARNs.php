<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Privatelink\V20200415\Models\ListVpcEndpointServiceUsersResponseBody;

use AlibabaCloud\Dara\Model;

class userARNs extends Model
{
    /**
     * @var string
     */
    public $userARN;
    protected $_name = [
        'userARN' => 'UserARN',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->userARN) {
            $res['UserARN'] = $this->userARN;
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
        if (isset($map['UserARN'])) {
            $model->userARN = $map['UserARN'];
        }

        return $model;
    }
}
