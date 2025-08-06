<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\CreateAppPolicyResponseBody;

use AlibabaCloud\Dara\Model;

class appPolicy extends Model
{
    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $modificationTime;

    /**
     * @var string
     */
    public $policyName;

    /**
     * @var string
     */
    public $policyType;

    /**
     * @var string
     */
    public $policyValue;

    /**
     * @var string
     */
    public $products;
    protected $_name = [
        'creationTime' => 'CreationTime',
        'description' => 'Description',
        'modificationTime' => 'ModificationTime',
        'policyName' => 'PolicyName',
        'policyType' => 'PolicyType',
        'policyValue' => 'PolicyValue',
        'products' => 'Products',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->modificationTime) {
            $res['ModificationTime'] = $this->modificationTime;
        }

        if (null !== $this->policyName) {
            $res['PolicyName'] = $this->policyName;
        }

        if (null !== $this->policyType) {
            $res['PolicyType'] = $this->policyType;
        }

        if (null !== $this->policyValue) {
            $res['PolicyValue'] = $this->policyValue;
        }

        if (null !== $this->products) {
            $res['Products'] = $this->products;
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
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['ModificationTime'])) {
            $model->modificationTime = $map['ModificationTime'];
        }

        if (isset($map['PolicyName'])) {
            $model->policyName = $map['PolicyName'];
        }

        if (isset($map['PolicyType'])) {
            $model->policyType = $map['PolicyType'];
        }

        if (isset($map['PolicyValue'])) {
            $model->policyValue = $map['PolicyValue'];
        }

        if (isset($map['Products'])) {
            $model->products = $map['Products'];
        }

        return $model;
    }
}
