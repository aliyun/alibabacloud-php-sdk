<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models\GetProvisionedProductPlanResponseBody\planDetail\approvalDetail\operationRecords;

use AlibabaCloud\Dara\Model;

class operator extends Model
{
    /**
     * @var string
     */
    public $principalId;

    /**
     * @var string
     */
    public $principalName;

    /**
     * @var string
     */
    public $principalType;
    protected $_name = [
        'principalId' => 'PrincipalId',
        'principalName' => 'PrincipalName',
        'principalType' => 'PrincipalType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->principalId) {
            $res['PrincipalId'] = $this->principalId;
        }

        if (null !== $this->principalName) {
            $res['PrincipalName'] = $this->principalName;
        }

        if (null !== $this->principalType) {
            $res['PrincipalType'] = $this->principalType;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PrincipalId'])) {
            $model->principalId = $map['PrincipalId'];
        }

        if (isset($map['PrincipalName'])) {
            $model->principalName = $map['PrincipalName'];
        }

        if (isset($map['PrincipalType'])) {
            $model->principalType = $map['PrincipalType'];
        }

        return $model;
    }
}
