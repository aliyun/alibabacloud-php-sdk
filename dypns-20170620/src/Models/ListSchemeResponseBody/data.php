<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypns\V20170620\Models\ListSchemeResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $applyTime;

    /**
     * @var string
     */
    public $auditDesc;

    /**
     * @var int[]
     */
    public $businessTypeList;

    /**
     * @var string
     */
    public $companyName;

    /**
     * @var int
     */
    public $schemeId;

    /**
     * @var string
     */
    public $schemeName;

    /**
     * @var int
     */
    public $schemeType;

    /**
     * @var int
     */
    public $status;
    protected $_name = [
        'applyTime' => 'ApplyTime',
        'auditDesc' => 'AuditDesc',
        'businessTypeList' => 'BusinessTypeList',
        'companyName' => 'CompanyName',
        'schemeId' => 'SchemeId',
        'schemeName' => 'SchemeName',
        'schemeType' => 'SchemeType',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->businessTypeList)) {
            Model::validateArray($this->businessTypeList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applyTime) {
            $res['ApplyTime'] = $this->applyTime;
        }

        if (null !== $this->auditDesc) {
            $res['AuditDesc'] = $this->auditDesc;
        }

        if (null !== $this->businessTypeList) {
            if (\is_array($this->businessTypeList)) {
                $res['BusinessTypeList'] = [];
                $n1 = 0;
                foreach ($this->businessTypeList as $item1) {
                    $res['BusinessTypeList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->companyName) {
            $res['CompanyName'] = $this->companyName;
        }

        if (null !== $this->schemeId) {
            $res['SchemeId'] = $this->schemeId;
        }

        if (null !== $this->schemeName) {
            $res['SchemeName'] = $this->schemeName;
        }

        if (null !== $this->schemeType) {
            $res['SchemeType'] = $this->schemeType;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['ApplyTime'])) {
            $model->applyTime = $map['ApplyTime'];
        }

        if (isset($map['AuditDesc'])) {
            $model->auditDesc = $map['AuditDesc'];
        }

        if (isset($map['BusinessTypeList'])) {
            if (!empty($map['BusinessTypeList'])) {
                $model->businessTypeList = [];
                $n1 = 0;
                foreach ($map['BusinessTypeList'] as $item1) {
                    $model->businessTypeList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['CompanyName'])) {
            $model->companyName = $map['CompanyName'];
        }

        if (isset($map['SchemeId'])) {
            $model->schemeId = $map['SchemeId'];
        }

        if (isset($map['SchemeName'])) {
            $model->schemeName = $map['SchemeName'];
        }

        if (isset($map['SchemeType'])) {
            $model->schemeType = $map['SchemeType'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
