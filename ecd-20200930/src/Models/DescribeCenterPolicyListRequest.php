<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

class DescribeCenterPolicyListRequest extends Model
{
    /**
     * @var string
     */
    public $academicProxy;

    /**
     * @var int
     */
    public $businessType;

    /**
     * @var string
     */
    public $modelLibrary;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string[]
     */
    public $policyGroupId;

    /**
     * @var string
     */
    public $portProxy;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $scope;
    protected $_name = [
        'academicProxy' => 'AcademicProxy',
        'businessType' => 'BusinessType',
        'modelLibrary' => 'ModelLibrary',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'policyGroupId' => 'PolicyGroupId',
        'portProxy' => 'PortProxy',
        'resourceType' => 'ResourceType',
        'scope' => 'Scope',
    ];

    public function validate()
    {
        if (\is_array($this->policyGroupId)) {
            Model::validateArray($this->policyGroupId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->academicProxy) {
            $res['AcademicProxy'] = $this->academicProxy;
        }

        if (null !== $this->businessType) {
            $res['BusinessType'] = $this->businessType;
        }

        if (null !== $this->modelLibrary) {
            $res['ModelLibrary'] = $this->modelLibrary;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->policyGroupId) {
            if (\is_array($this->policyGroupId)) {
                $res['PolicyGroupId'] = [];
                $n1 = 0;
                foreach ($this->policyGroupId as $item1) {
                    $res['PolicyGroupId'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->portProxy) {
            $res['PortProxy'] = $this->portProxy;
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
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
        if (isset($map['AcademicProxy'])) {
            $model->academicProxy = $map['AcademicProxy'];
        }

        if (isset($map['BusinessType'])) {
            $model->businessType = $map['BusinessType'];
        }

        if (isset($map['ModelLibrary'])) {
            $model->modelLibrary = $map['ModelLibrary'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['PolicyGroupId'])) {
            if (!empty($map['PolicyGroupId'])) {
                $model->policyGroupId = [];
                $n1 = 0;
                foreach ($map['PolicyGroupId'] as $item1) {
                    $model->policyGroupId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['PortProxy'])) {
            $model->portProxy = $map['PortProxy'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }

        return $model;
    }
}
