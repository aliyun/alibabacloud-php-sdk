<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetSasContainerWebDefenseRuleApplicationResponseBody;

use AlibabaCloud\Tea\Model;

class containerWebDefenseAppList extends Model
{
    /**
     * @description The user ID.
     *
     * @example 5944922169365****
     *
     * @var int
     */
    public $aliUid;

    /**
     * @description The ID of the container cluster.
     *
     * >  The IDs of clusters can be obtained by using the [DescribeGroupedContainerInstances](~~182997~~) operation.
     * @example cfb41a869c71e4678a97021582dd8****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The time when the application was created. Unit: milliseconds.
     *
     * @example 1677839038000
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @description The last modification time. Unit: milliseconds.
     *
     * @example 1667891185000
     *
     * @var int
     */
    public $gmtModified;

    /**
     * @description The ID of the node.
     *
     * @example 143761
     *
     * @var int
     */
    public $id;

    /**
     * @description The ID of the rule.
     *
     * @example 403327
     *
     * @var int
     */
    public $ruleId;

    /**
     * @description The value of the application label.
     *
     * @example app:test
     *
     * @var string
     */
    public $tag;
    protected $_name = [
        'aliUid'      => 'AliUid',
        'clusterId'   => 'ClusterId',
        'gmtCreate'   => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'id'          => 'Id',
        'ruleId'      => 'RuleId',
        'tag'         => 'Tag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return containerWebDefenseAppList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }

        return $model;
    }
}
