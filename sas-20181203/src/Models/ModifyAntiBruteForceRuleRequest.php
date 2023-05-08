<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ModifyAntiBruteForceRuleRequest extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $defaultRule;

    /**
     * @example 10
     *
     * @var int
     */
    public $failCount;

    /**
     * @example 5
     *
     * @var int
     */
    public $forbiddenTime;

    /**
     * @description The threshold of logon failures that you specify. Valid values:
     *
     *   **2**
     *   **3**
     *   **4**
     *   **5**
     *   **10**
     *   **50**
     *   **80**
     *   **100**
     *
     * @example 65778
     *
     * @var int
     */
    public $id;

    /**
     * @description Modifies a defense rule against brute-force attacks.
     *
     * @example TestRule
     *
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example 1.2.XX.XX
     *
     * @var string
     */
    public $sourceIp;

    /**
     * @description ModifyAntiBruteForceRule
     *
     * @example 1
     *
     * @var int
     */
    public $span;

    /**
     * @example uuid-13213-dasda
     *
     * @var string[]
     */
    public $uuidList;
    protected $_name = [
        'defaultRule'     => 'DefaultRule',
        'failCount'       => 'FailCount',
        'forbiddenTime'   => 'ForbiddenTime',
        'id'              => 'Id',
        'name'            => 'Name',
        'resourceOwnerId' => 'ResourceOwnerId',
        'sourceIp'        => 'SourceIp',
        'span'            => 'Span',
        'uuidList'        => 'UuidList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->defaultRule) {
            $res['DefaultRule'] = $this->defaultRule;
        }
        if (null !== $this->failCount) {
            $res['FailCount'] = $this->failCount;
        }
        if (null !== $this->forbiddenTime) {
            $res['ForbiddenTime'] = $this->forbiddenTime;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->span) {
            $res['Span'] = $this->span;
        }
        if (null !== $this->uuidList) {
            $res['UuidList'] = $this->uuidList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyAntiBruteForceRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DefaultRule'])) {
            $model->defaultRule = $map['DefaultRule'];
        }
        if (isset($map['FailCount'])) {
            $model->failCount = $map['FailCount'];
        }
        if (isset($map['ForbiddenTime'])) {
            $model->forbiddenTime = $map['ForbiddenTime'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['Span'])) {
            $model->span = $map['Span'];
        }
        if (isset($map['UuidList'])) {
            if (!empty($map['UuidList'])) {
                $model->uuidList = $map['UuidList'];
            }
        }

        return $model;
    }
}
