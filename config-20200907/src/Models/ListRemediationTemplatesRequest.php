<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class ListRemediationTemplatesRequest extends Model
{
    /**
     * @description The identifier of the managed rule.
     *
     * You can call the [ListCompliancePackTemplates](~~261176~~) operation to obtain the managed rule identifier.
     * @example oss-bucket-public-write-prohibited
     *
     * @var string
     */
    public $managedRuleIdentifier;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @description The type of the remediation template. Valid value: OOS, which stands for Operation Orchestration Service.
     *
     * @example OOS
     *
     * @var string
     */
    public $remediationType;
    protected $_name = [
        'managedRuleIdentifier' => 'ManagedRuleIdentifier',
        'pageNumber'            => 'PageNumber',
        'pageSize'              => 'PageSize',
        'remediationType'       => 'RemediationType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->managedRuleIdentifier) {
            $res['ManagedRuleIdentifier'] = $this->managedRuleIdentifier;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->remediationType) {
            $res['RemediationType'] = $this->remediationType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListRemediationTemplatesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ManagedRuleIdentifier'])) {
            $model->managedRuleIdentifier = $map['ManagedRuleIdentifier'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RemediationType'])) {
            $model->remediationType = $map['RemediationType'];
        }

        return $model;
    }
}
