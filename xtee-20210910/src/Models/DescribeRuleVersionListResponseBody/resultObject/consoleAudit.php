<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeRuleVersionListResponseBody\resultObject;

use AlibabaCloud\Tea\Model;

class consoleAudit extends Model
{
    /**
     * @var string
     */
    public $applyUserId;

    /**
     * @var string
     */
    public $applyUserName;

    /**
     * @var string
     */
    public $auditMsg;

    /**
     * @var string
     */
    public $auditRealUserId;

    /**
     * @var string
     */
    public $auditRealUserName;

    /**
     * @var string
     */
    public $auditRemark;

    /**
     * @var string
     */
    public $auditStatus;

    /**
     * @var int
     */
    public $auditTime;

    /**
     * @var string
     */
    public $auditUserId;

    /**
     * @var string
     */
    public $auditUserName;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $relationExt;

    /**
     * @var int
     */
    public $relationId;

    /**
     * @var string
     */
    public $relationName;

    /**
     * @var string
     */
    public $relationType;
    protected $_name = [
        'applyUserId'       => 'applyUserId',
        'applyUserName'     => 'applyUserName',
        'auditMsg'          => 'auditMsg',
        'auditRealUserId'   => 'auditRealUserId',
        'auditRealUserName' => 'auditRealUserName',
        'auditRemark'       => 'auditRemark',
        'auditStatus'       => 'auditStatus',
        'auditTime'         => 'auditTime',
        'auditUserId'       => 'auditUserId',
        'auditUserName'     => 'auditUserName',
        'gmtCreate'         => 'gmtCreate',
        'id'                => 'id',
        'relationExt'       => 'relationExt',
        'relationId'        => 'relationId',
        'relationName'      => 'relationName',
        'relationType'      => 'relationType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applyUserId) {
            $res['applyUserId'] = $this->applyUserId;
        }
        if (null !== $this->applyUserName) {
            $res['applyUserName'] = $this->applyUserName;
        }
        if (null !== $this->auditMsg) {
            $res['auditMsg'] = $this->auditMsg;
        }
        if (null !== $this->auditRealUserId) {
            $res['auditRealUserId'] = $this->auditRealUserId;
        }
        if (null !== $this->auditRealUserName) {
            $res['auditRealUserName'] = $this->auditRealUserName;
        }
        if (null !== $this->auditRemark) {
            $res['auditRemark'] = $this->auditRemark;
        }
        if (null !== $this->auditStatus) {
            $res['auditStatus'] = $this->auditStatus;
        }
        if (null !== $this->auditTime) {
            $res['auditTime'] = $this->auditTime;
        }
        if (null !== $this->auditUserId) {
            $res['auditUserId'] = $this->auditUserId;
        }
        if (null !== $this->auditUserName) {
            $res['auditUserName'] = $this->auditUserName;
        }
        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->relationExt) {
            $res['relationExt'] = $this->relationExt;
        }
        if (null !== $this->relationId) {
            $res['relationId'] = $this->relationId;
        }
        if (null !== $this->relationName) {
            $res['relationName'] = $this->relationName;
        }
        if (null !== $this->relationType) {
            $res['relationType'] = $this->relationType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return consoleAudit
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['applyUserId'])) {
            $model->applyUserId = $map['applyUserId'];
        }
        if (isset($map['applyUserName'])) {
            $model->applyUserName = $map['applyUserName'];
        }
        if (isset($map['auditMsg'])) {
            $model->auditMsg = $map['auditMsg'];
        }
        if (isset($map['auditRealUserId'])) {
            $model->auditRealUserId = $map['auditRealUserId'];
        }
        if (isset($map['auditRealUserName'])) {
            $model->auditRealUserName = $map['auditRealUserName'];
        }
        if (isset($map['auditRemark'])) {
            $model->auditRemark = $map['auditRemark'];
        }
        if (isset($map['auditStatus'])) {
            $model->auditStatus = $map['auditStatus'];
        }
        if (isset($map['auditTime'])) {
            $model->auditTime = $map['auditTime'];
        }
        if (isset($map['auditUserId'])) {
            $model->auditUserId = $map['auditUserId'];
        }
        if (isset($map['auditUserName'])) {
            $model->auditUserName = $map['auditUserName'];
        }
        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['relationExt'])) {
            $model->relationExt = $map['relationExt'];
        }
        if (isset($map['relationId'])) {
            $model->relationId = $map['relationId'];
        }
        if (isset($map['relationName'])) {
            $model->relationName = $map['relationName'];
        }
        if (isset($map['relationType'])) {
            $model->relationType = $map['relationType'];
        }

        return $model;
    }
}
