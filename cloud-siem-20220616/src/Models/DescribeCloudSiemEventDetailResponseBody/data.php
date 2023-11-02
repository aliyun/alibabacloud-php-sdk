<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeCloudSiemEventDetailResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 4
     *
     * @var int
     */
    public $alertNum;

    /**
     * @example 127608589417****
     *
     * @var int
     */
    public $aliuid;

    /**
     * @example 4
     *
     * @var int
     */
    public $assetNum;

    /**
     * @example ["T1595.002 Vulnerability Scanning"]
     *
     * @var string[]
     */
    public $attCkLabels;

    /**
     * @example [sas,waf]
     *
     * @var string[]
     */
    public $dataSources;

    /**
     * @example The threat event contains 13 Miner Network,1 Execute suspicious encoded commands on Linux, etc
     *
     * @var string
     */
    public $description;

    /**
     * @example The threat event contains 13 Miner Network,1 Execute suspicious encoded commands on Linux, etc
     *
     * @var string
     */
    public $descriptionEn;

    /**
     * @example {"event_transfer_type":"customize_rule"}
     *
     * @var string
     */
    public $extContent;

    /**
     * @example 2021-01-06 16:37:29
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 2021-01-06 16:37:29
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example Multiple type of alerts, including Miner Network, Command line download and run malicious files, Backdoor Process, etc
     *
     * @var string
     */
    public $incidentName;

    /**
     * @example Multiple type of alerts, including Miner Network, Command line download and run malicious files, Backdoor Process, etc
     *
     * @var string
     */
    public $incidentNameEn;

    /**
     * @example 85ea4241-798f-4684-a876-65d4f0c3****
     *
     * @var string
     */
    public $incidentUuid;

    /**
     * @example dealed
     *
     * @var string
     */
    public $remark;

    /**
     * @example 0
     *
     * @var int
     */
    public $status;

    /**
     * @example remind
     *
     * @var string
     */
    public $threatLevel;

    /**
     * @example 90.2
     *
     * @var float
     */
    public $threatScore;
    protected $_name = [
        'alertNum'       => 'AlertNum',
        'aliuid'         => 'Aliuid',
        'assetNum'       => 'AssetNum',
        'attCkLabels'    => 'AttCkLabels',
        'dataSources'    => 'DataSources',
        'description'    => 'Description',
        'descriptionEn'  => 'DescriptionEn',
        'extContent'     => 'ExtContent',
        'gmtCreate'      => 'GmtCreate',
        'gmtModified'    => 'GmtModified',
        'incidentName'   => 'IncidentName',
        'incidentNameEn' => 'IncidentNameEn',
        'incidentUuid'   => 'IncidentUuid',
        'remark'         => 'Remark',
        'status'         => 'Status',
        'threatLevel'    => 'ThreatLevel',
        'threatScore'    => 'ThreatScore',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['AttCkLabels'] = $this->attCkLabels;
        }
        if (null !== $this->dataSources) {
            $res['DataSources'] = $this->dataSources;
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
        if (null !== $this->incidentUuid) {
            $res['IncidentUuid'] = $this->incidentUuid;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
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

    /**
     * @param array $map
     *
     * @return data
     */
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
                $model->attCkLabels = $map['AttCkLabels'];
            }
        }
        if (isset($map['DataSources'])) {
            if (!empty($map['DataSources'])) {
                $model->dataSources = $map['DataSources'];
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
        if (isset($map['IncidentUuid'])) {
            $model->incidentUuid = $map['IncidentUuid'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
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
