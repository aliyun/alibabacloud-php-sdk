<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models\DescribeGatewayResponseBody;

use AlibabaCloud\Tea\Model;

class internetAclPolicyList extends Model
{
    /**
     * @description The description.
     *
     * @example test
     *
     * @var string
     */
    public $comment;

    /**
     * @description The Classless Inter-Domain Routing (CIDR) block that is allowed to access the private gateway.
     *
     * @example 192.168.1.1/32
     *
     * @var string
     */
    public $entry;

    /**
     * @description The state of the private gateway.
     *
     * Valid values:
     *
     *   Creating
     *
     * <!-- -->
     *
     *   Running
     *
     * <!-- -->
     * @example Running
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'comment' => 'Comment',
        'entry'   => 'Entry',
        'status'  => 'Status',
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return internetAclPolicyList
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
