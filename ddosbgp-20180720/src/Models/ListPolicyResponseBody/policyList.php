<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models\ListPolicyResponseBody;

use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\ListPolicyResponseBody\policyList\content;
use AlibabaCloud\Tea\Model;

class policyList extends Model
{
    /**
     * @description The number of protected objects that are added to the policy.
     *
     * @example 0
     *
     * @var int
     */
    public $attachedCount;

    /**
     * @description The content of the policy.
     *
     * @var content
     */
    public $content;

    /**
     * @description The ID of the policy.
     *
     * @example 877afbdf-3982-4d36-9886-f043********
     *
     * @var string
     */
    public $id;

    /**
     * @description The name of the policy.
     *
     * @example test**
     *
     * @var string
     */
    public $name;

    /**
     * @example test
     *
     * @var string
     */
    public $remark;

    /**
     * @description The type of the policy. Valid values:
     *
     *   **l3**: IP-specific mitigation policies.
     *   **l4**: port-specific mitigation policies.
     *
     * @example l3
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'attachedCount' => 'AttachedCount',
        'content'       => 'Content',
        'id'            => 'Id',
        'name'          => 'Name',
        'remark'        => 'Remark',
        'type'          => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attachedCount) {
            $res['AttachedCount'] = $this->attachedCount;
        }
        if (null !== $this->content) {
            $res['Content'] = null !== $this->content ? $this->content->toMap() : null;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return policyList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AttachedCount'])) {
            $model->attachedCount = $map['AttachedCount'];
        }
        if (isset($map['Content'])) {
            $model->content = content::fromMap($map['Content']);
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
