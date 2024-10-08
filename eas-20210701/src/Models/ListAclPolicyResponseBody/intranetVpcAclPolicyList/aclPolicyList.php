<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models\ListAclPolicyResponseBody\intranetVpcAclPolicyList;

use AlibabaCloud\Tea\Model;

class aclPolicyList extends Model
{
    /**
     * @description The comment on the IP CIDR block in the VPC that can access the private gateway over the internal network.
     *
     * @example Test Entry
     *
     * @var string
     */
    public $comment;

    /**
     * @description The IP CIDR block in the VPC that can access the private gateway over the internal network.
     *
     * @example 192.168.XX.XX/24
     *
     * @var string
     */
    public $entry;
    protected $_name = [
        'comment' => 'Comment',
        'entry'   => 'Entry',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->entry) {
            $res['Entry'] = $this->entry;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return aclPolicyList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['Entry'])) {
            $model->entry = $map['Entry'];
        }

        return $model;
    }
}
