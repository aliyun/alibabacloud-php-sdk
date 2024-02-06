<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DeleteNetworkAclRequest extends Model
{
    /**
     * @description The ID of the network ACL.
     *
     * @example nacl-bp1lhl0taikrbgnh****
     *
     * @var string
     */
    public $networkAclId;
    protected $_name = [
        'networkAclId' => 'NetworkAclId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->networkAclId) {
            $res['NetworkAclId'] = $this->networkAclId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteNetworkAclRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NetworkAclId'])) {
            $model->networkAclId = $map['NetworkAclId'];
        }

        return $model;
    }
}
