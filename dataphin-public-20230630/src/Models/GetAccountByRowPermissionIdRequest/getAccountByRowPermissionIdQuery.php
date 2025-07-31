<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetAccountByRowPermissionIdRequest;

use AlibabaCloud\Tea\Model;

class getAccountByRowPermissionIdQuery extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 300001234
     *
     * @var int
     */
    public $rowPermissionId;

    /**
     * @description This parameter is required.
     *
     * @var int[]
     */
    public $ruleIds;
    protected $_name = [
        'rowPermissionId' => 'RowPermissionId',
        'ruleIds' => 'RuleIds',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->rowPermissionId) {
            $res['RowPermissionId'] = $this->rowPermissionId;
        }
        if (null !== $this->ruleIds) {
            $res['RuleIds'] = $this->ruleIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return getAccountByRowPermissionIdQuery
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RowPermissionId'])) {
            $model->rowPermissionId = $map['RowPermissionId'];
        }
        if (isset($map['RuleIds'])) {
            if (!empty($map['RuleIds'])) {
                $model->ruleIds = $map['RuleIds'];
            }
        }

        return $model;
    }
}
