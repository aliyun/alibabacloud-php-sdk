<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DeleteNetworkAclEntryRequest extends Model
{
    /**
     * @description The ID of the network ACL for which you want to delete a rule.
     *
     * @example nae-5****
     *
     * @var string
     */
    public $networkAclEntryId;
    protected $_name = [
        'networkAclEntryId' => 'NetworkAclEntryId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->networkAclEntryId) {
            $res['NetworkAclEntryId'] = $this->networkAclEntryId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteNetworkAclEntryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NetworkAclEntryId'])) {
            $model->networkAclEntryId = $map['NetworkAclEntryId'];
        }

        return $model;
    }
}
