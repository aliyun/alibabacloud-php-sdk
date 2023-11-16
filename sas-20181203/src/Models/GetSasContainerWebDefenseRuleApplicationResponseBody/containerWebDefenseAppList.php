<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetSasContainerWebDefenseRuleApplicationResponseBody;

use AlibabaCloud\Tea\Model;

class containerWebDefenseAppList extends Model
{
    /**
     * @example 5944922169365****
     *
     * @var int
     */
    public $aliUid;

    /**
     * @example cfb41a869c71e4678a97021582dd8****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example 1677839038000
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @example 1667891185000
     *
     * @var int
     */
    public $gmtModified;

    /**
     * @example 143761
     *
     * @var int
     */
    public $id;

    /**
     * @example 403327
     *
     * @var int
     */
    public $ruleId;

    /**
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
