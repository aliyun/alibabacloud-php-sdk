<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class ListCheckPoliciesRequest extends Model
{
    /**
     * @var string[]
     */
    public $checkTypes;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var int
     */
    public $dependentPolicyId;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $policyId;

    /**
     * @var string
     */
    public $policyShowName;

    /**
     * @var string
     */
    public $policyType;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'checkTypes' => 'CheckTypes',
        'currentPage' => 'CurrentPage',
        'dependentPolicyId' => 'DependentPolicyId',
        'lang' => 'Lang',
        'pageSize' => 'PageSize',
        'policyId' => 'PolicyId',
        'policyShowName' => 'PolicyShowName',
        'policyType' => 'PolicyType',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->checkTypes)) {
            Model::validateArray($this->checkTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkTypes) {
            if (\is_array($this->checkTypes)) {
                $res['CheckTypes'] = [];
                $n1 = 0;
                foreach ($this->checkTypes as $item1) {
                    $res['CheckTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->dependentPolicyId) {
            $res['DependentPolicyId'] = $this->dependentPolicyId;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }

        if (null !== $this->policyShowName) {
            $res['PolicyShowName'] = $this->policyShowName;
        }

        if (null !== $this->policyType) {
            $res['PolicyType'] = $this->policyType;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['CheckTypes'])) {
            if (!empty($map['CheckTypes'])) {
                $model->checkTypes = [];
                $n1 = 0;
                foreach ($map['CheckTypes'] as $item1) {
                    $model->checkTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['DependentPolicyId'])) {
            $model->dependentPolicyId = $map['DependentPolicyId'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }

        if (isset($map['PolicyShowName'])) {
            $model->policyShowName = $map['PolicyShowName'];
        }

        if (isset($map['PolicyType'])) {
            $model->policyType = $map['PolicyType'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
