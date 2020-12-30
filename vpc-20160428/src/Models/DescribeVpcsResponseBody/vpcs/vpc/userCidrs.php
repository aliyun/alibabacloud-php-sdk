<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpcsResponseBody\vpcs\vpc;

use AlibabaCloud\Tea\Model;

class userCidrs extends Model
{
    /**
     * @var string[]
     */
    public $userCidr;
    protected $_name = [
        'userCidr' => 'UserCidr',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userCidr) {
            $res['UserCidr'] = $this->userCidr;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userCidrs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserCidr'])) {
            if (!empty($map['UserCidr'])) {
                $model->userCidr = $map['UserCidr'];
            }
        }

        return $model;
    }
}
