<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class DeleteCompliancePacksRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $compliancePackIds;

    /**
     * @var bool
     */
    public $deleteRule;
    protected $_name = [
        'clientToken'       => 'ClientToken',
        'compliancePackIds' => 'CompliancePackIds',
        'deleteRule'        => 'DeleteRule',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->compliancePackIds) {
            $res['CompliancePackIds'] = $this->compliancePackIds;
        }
        if (null !== $this->deleteRule) {
            $res['DeleteRule'] = $this->deleteRule;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteCompliancePacksRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['CompliancePackIds'])) {
            $model->compliancePackIds = $map['CompliancePackIds'];
        }
        if (isset($map['DeleteRule'])) {
            $model->deleteRule = $map['DeleteRule'];
        }

        return $model;
    }
}
