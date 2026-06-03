<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypns\V20170620\Models\GetSchemeResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dypns\V20170620\Models\GetSchemeResponseBody\data\scenesList;

class data extends Model
{
    /**
     * @var string
     */
    public $auditDesc;

    /**
     * @var int
     */
    public $auditTime;

    /**
     * @var int[]
     */
    public $businessTypeList;

    /**
     * @var int
     */
    public $companyId;

    /**
     * @var string[]
     */
    public $cycleList;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $industryId;

    /**
     * @var scenesList[]
     */
    public $scenesList;

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
     * @var string
     */
    public $statement;

    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $templateId;
    protected $_name = [
        'auditDesc' => 'AuditDesc',
        'auditTime' => 'AuditTime',
        'businessTypeList' => 'BusinessTypeList',
        'companyId' => 'CompanyId',
        'cycleList' => 'CycleList',
        'description' => 'Description',
        'industryId' => 'IndustryId',
        'scenesList' => 'ScenesList',
        'schemeId' => 'SchemeId',
        'schemeName' => 'SchemeName',
        'schemeType' => 'SchemeType',
        'statement' => 'Statement',
        'status' => 'Status',
        'templateId' => 'TemplateId',
    ];

    public function validate()
    {
        if (\is_array($this->businessTypeList)) {
            Model::validateArray($this->businessTypeList);
        }
        if (\is_array($this->cycleList)) {
            Model::validateArray($this->cycleList);
        }
        if (\is_array($this->scenesList)) {
            Model::validateArray($this->scenesList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->auditDesc) {
            $res['AuditDesc'] = $this->auditDesc;
        }

        if (null !== $this->auditTime) {
            $res['AuditTime'] = $this->auditTime;
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

        if (null !== $this->companyId) {
            $res['CompanyId'] = $this->companyId;
        }

        if (null !== $this->cycleList) {
            if (\is_array($this->cycleList)) {
                $res['CycleList'] = [];
                $n1 = 0;
                foreach ($this->cycleList as $item1) {
                    $res['CycleList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->industryId) {
            $res['IndustryId'] = $this->industryId;
        }

        if (null !== $this->scenesList) {
            if (\is_array($this->scenesList)) {
                $res['ScenesList'] = [];
                $n1 = 0;
                foreach ($this->scenesList as $item1) {
                    $res['ScenesList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (null !== $this->statement) {
            $res['Statement'] = $this->statement;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
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
        if (isset($map['AuditDesc'])) {
            $model->auditDesc = $map['AuditDesc'];
        }

        if (isset($map['AuditTime'])) {
            $model->auditTime = $map['AuditTime'];
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

        if (isset($map['CompanyId'])) {
            $model->companyId = $map['CompanyId'];
        }

        if (isset($map['CycleList'])) {
            if (!empty($map['CycleList'])) {
                $model->cycleList = [];
                $n1 = 0;
                foreach ($map['CycleList'] as $item1) {
                    $model->cycleList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['IndustryId'])) {
            $model->industryId = $map['IndustryId'];
        }

        if (isset($map['ScenesList'])) {
            if (!empty($map['ScenesList'])) {
                $model->scenesList = [];
                $n1 = 0;
                foreach ($map['ScenesList'] as $item1) {
                    $model->scenesList[$n1] = scenesList::fromMap($item1);
                    ++$n1;
                }
            }
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

        if (isset($map['Statement'])) {
            $model->statement = $map['Statement'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
