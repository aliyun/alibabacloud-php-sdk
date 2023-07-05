<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Privatelink\V20200415\Models\ListVpcEndpointServiceUsersResponseBody;

use AlibabaCloud\Tea\Model;

class userARNs extends Model
{
    /**
     * @description The whitelist in the format of ARN.
     *
     * @example acs:ram:*::*
     *
     * @var string
     */
    public $userARN;
    protected $_name = [
        'userARN' => 'UserARN',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userARN) {
            $res['UserARN'] = $this->userARN;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userARNs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserARN'])) {
            $model->userARN = $map['UserARN'];
        }

        return $model;
    }
}
