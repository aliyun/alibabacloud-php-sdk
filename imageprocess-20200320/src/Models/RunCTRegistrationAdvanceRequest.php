<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\RunCTRegistrationAdvanceRequest\floatingList;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\RunCTRegistrationAdvanceRequest\referenceList;

class RunCTRegistrationAdvanceRequest extends Model
{
    /**
     * @var string
     */
    public $dataFormat;

    /**
     * @var string
     */
    public $dataSourceType;

    /**
     * @var floatingList[]
     */
    public $floatingList;

    /**
     * @var string
     */
    public $orgId;

    /**
     * @var string
     */
    public $orgName;

    /**
     * @var referenceList[]
     */
    public $referenceList;
    protected $_name = [
        'dataFormat' => 'DataFormat',
        'dataSourceType' => 'DataSourceType',
        'floatingList' => 'FloatingList',
        'orgId' => 'OrgId',
        'orgName' => 'OrgName',
        'referenceList' => 'ReferenceList',
    ];

    public function validate()
    {
        if (\is_array($this->floatingList)) {
            Model::validateArray($this->floatingList);
        }
        if (\is_array($this->referenceList)) {
            Model::validateArray($this->referenceList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataFormat) {
            $res['DataFormat'] = $this->dataFormat;
        }

        if (null !== $this->dataSourceType) {
            $res['DataSourceType'] = $this->dataSourceType;
        }

        if (null !== $this->floatingList) {
            if (\is_array($this->floatingList)) {
                $res['FloatingList'] = [];
                $n1 = 0;
                foreach ($this->floatingList as $item1) {
                    $res['FloatingList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->orgId) {
            $res['OrgId'] = $this->orgId;
        }

        if (null !== $this->orgName) {
            $res['OrgName'] = $this->orgName;
        }

        if (null !== $this->referenceList) {
            if (\is_array($this->referenceList)) {
                $res['ReferenceList'] = [];
                $n1 = 0;
                foreach ($this->referenceList as $item1) {
                    $res['ReferenceList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['DataFormat'])) {
            $model->dataFormat = $map['DataFormat'];
        }

        if (isset($map['DataSourceType'])) {
            $model->dataSourceType = $map['DataSourceType'];
        }

        if (isset($map['FloatingList'])) {
            if (!empty($map['FloatingList'])) {
                $model->floatingList = [];
                $n1 = 0;
                foreach ($map['FloatingList'] as $item1) {
                    $model->floatingList[$n1++] = floatingList::fromMap($item1);
                }
            }
        }

        if (isset($map['OrgId'])) {
            $model->orgId = $map['OrgId'];
        }

        if (isset($map['OrgName'])) {
            $model->orgName = $map['OrgName'];
        }

        if (isset($map['ReferenceList'])) {
            if (!empty($map['ReferenceList'])) {
                $model->referenceList = [];
                $n1 = 0;
                foreach ($map['ReferenceList'] as $item1) {
                    $model->referenceList[$n1++] = referenceList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
