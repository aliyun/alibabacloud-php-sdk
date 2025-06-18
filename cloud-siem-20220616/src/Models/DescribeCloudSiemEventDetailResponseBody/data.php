<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeCloudSiemEventDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeCloudSiemEventDetailResponseBody\data\attckStages;

class data extends Model
{
    /**
     * @var int
     */
    public $alertNum;

    /**
     * @var int
     */
    public $aliuid;

    /**
     * @var int
     */
    public $assetNum;

    /**
     * @var string[]
     */
    public $attCkLabels;

    /**
     * @var attckStages[]
     */
    public $attckStages;

    /**
     * @var string[]
     */
    public $dataSources;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $descriptionEn;

    /**
     * @var string
     */
    public $extContent;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $incidentName;

    /**
     * @var string
     */
    public $incidentNameEn;

    /**
     * @var string
     */
    public $incidentType;

    /**
     * @var string
     */
    public $incidentUuid;

    /**
     * @var string
     */
    public $referAccount;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $ruleId;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $threatLevel;

    /**
     * @var float
     */
    public $threatScore;
    protected $_name = [
        'alertNum' => 'AlertNum',
        'aliuid' => 'Aliuid',
        'assetNum' => 'AssetNum',
        'attCkLabels' => 'AttCkLabels',
        'attckStages' => 'AttckStages',
        'dataSources' => 'DataSources',
        'description' => 'Description',
        'descriptionEn' => 'DescriptionEn',
        'extContent' => 'ExtContent',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'incidentName' => 'IncidentName',
        'incidentNameEn' => 'IncidentNameEn',
        'incidentType' => 'IncidentType',
        'incidentUuid' => 'IncidentUuid',
        'referAccount' => 'ReferAccount',
        'remark' => 'Remark',
        'ruleId' => 'RuleId',
        'status' => 'Status',
        'threatLevel' => 'ThreatLevel',
        'threatScore' => 'ThreatScore',
    ];

    public function validate()
    {
        if (\is_array($this->attCkLabels)) {
            Model::validateArray($this->attCkLabels);
        }
        if (\is_array($this->attckStages)) {
            Model::validateArray($this->attckStages);
        }
        if (\is_array($this->dataSources)) {
            Model::validateArray($this->dataSources);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertNum) {
            $res['AlertNum'] = $this->alertNum;
        }

        if (null !== $this->aliuid) {
            $res['Aliuid'] = $this->aliuid;
        }

        if (null !== $this->assetNum) {
            $res['AssetNum'] = $this->assetNum;
        }

        if (null !== $this->attCkLabels) {
            if (\is_array($this->attCkLabels)) {
                $res['AttCkLabels'] = [];
                $n1 = 0;
                foreach ($this->attCkLabels as $item1) {
                    $res['AttCkLabels'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->attckStages) {
            if (\is_array($this->attckStages)) {
                $res['AttckStages'] = [];
                $n1 = 0;
                foreach ($this->attckStages as $item1) {
                    $res['AttckStages'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->dataSources) {
            if (\is_array($this->dataSources)) {
                $res['DataSources'] = [];
                $n1 = 0;
                foreach ($this->dataSources as $item1) {
                    $res['DataSources'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->descriptionEn) {
            $res['DescriptionEn'] = $this->descriptionEn;
        }

        if (null !== $this->extContent) {
            $res['ExtContent'] = $this->extContent;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->incidentName) {
            $res['IncidentName'] = $this->incidentName;
        }

        if (null !== $this->incidentNameEn) {
            $res['IncidentNameEn'] = $this->incidentNameEn;
        }

        if (null !== $this->incidentType) {
            $res['IncidentType'] = $this->incidentType;
        }

        if (null !== $this->incidentUuid) {
            $res['IncidentUuid'] = $this->incidentUuid;
        }

        if (null !== $this->referAccount) {
            $res['ReferAccount'] = $this->referAccount;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->threatLevel) {
            $res['ThreatLevel'] = $this->threatLevel;
        }

        if (null !== $this->threatScore) {
            $res['ThreatScore'] = $this->threatScore;
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
        if (isset($map['AlertNum'])) {
            $model->alertNum = $map['AlertNum'];
        }

        if (isset($map['Aliuid'])) {
            $model->aliuid = $map['Aliuid'];
        }

        if (isset($map['AssetNum'])) {
            $model->assetNum = $map['AssetNum'];
        }

        if (isset($map['AttCkLabels'])) {
            if (!empty($map['AttCkLabels'])) {
                $model->attCkLabels = [];
                $n1 = 0;
                foreach ($map['AttCkLabels'] as $item1) {
                    $model->attCkLabels[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['AttckStages'])) {
            if (!empty($map['AttckStages'])) {
                $model->attckStages = [];
                $n1 = 0;
                foreach ($map['AttckStages'] as $item1) {
                    $model->attckStages[$n1] = attckStages::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['DataSources'])) {
            if (!empty($map['DataSources'])) {
                $model->dataSources = [];
                $n1 = 0;
                foreach ($map['DataSources'] as $item1) {
                    $model->dataSources[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DescriptionEn'])) {
            $model->descriptionEn = $map['DescriptionEn'];
        }

        if (isset($map['ExtContent'])) {
            $model->extContent = $map['ExtContent'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['IncidentName'])) {
            $model->incidentName = $map['IncidentName'];
        }

        if (isset($map['IncidentNameEn'])) {
            $model->incidentNameEn = $map['IncidentNameEn'];
        }

        if (isset($map['IncidentType'])) {
            $model->incidentType = $map['IncidentType'];
        }

        if (isset($map['IncidentUuid'])) {
            $model->incidentUuid = $map['IncidentUuid'];
        }

        if (isset($map['ReferAccount'])) {
            $model->referAccount = $map['ReferAccount'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['ThreatLevel'])) {
            $model->threatLevel = $map['ThreatLevel'];
        }

        if (isset($map['ThreatScore'])) {
            $model->threatScore = $map['ThreatScore'];
        }

        return $model;
    }
}
