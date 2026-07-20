<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Dara\Model;

class GetCatalogKmsGrantsResponseBody extends Model
{
    /**
     * @var string
     */
    public $dataAccessRoleArn;

    /**
     * @var string
     */
    public $keyPolicyStatement;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $workflowRoleArn;
    protected $_name = [
        'dataAccessRoleArn' => 'dataAccessRoleArn',
        'keyPolicyStatement' => 'keyPolicyStatement',
        'region' => 'region',
        'workflowRoleArn' => 'workflowRoleArn',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataAccessRoleArn) {
            $res['dataAccessRoleArn'] = $this->dataAccessRoleArn;
        }

        if (null !== $this->keyPolicyStatement) {
            $res['keyPolicyStatement'] = $this->keyPolicyStatement;
        }

        if (null !== $this->region) {
            $res['region'] = $this->region;
        }

        if (null !== $this->workflowRoleArn) {
            $res['workflowRoleArn'] = $this->workflowRoleArn;
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
        if (isset($map['dataAccessRoleArn'])) {
            $model->dataAccessRoleArn = $map['dataAccessRoleArn'];
        }

        if (isset($map['keyPolicyStatement'])) {
            $model->keyPolicyStatement = $map['keyPolicyStatement'];
        }

        if (isset($map['region'])) {
            $model->region = $map['region'];
        }

        if (isset($map['workflowRoleArn'])) {
            $model->workflowRoleArn = $map['workflowRoleArn'];
        }

        return $model;
    }
}
