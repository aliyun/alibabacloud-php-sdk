<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeCloudSiemEventsResponseBody\data;

use AlibabaCloud\Tea\Model;

class responseData extends Model
{
    /**
     * @description The number of alerts that are associated with the event.
     *
     * @example 4
     *
     * @var int
     */
    public $alertNum;

    /**
     * @description The ID of the Alibaba Cloud account to which the event belongs.
     *
     * @example 127608589417****
     *
     * @var int
     */
    public $aliuid;

    /**
     * @description The number of assets that are associated with the event.
     *
     * @example 4
     *
     * @var int
     */
    public $assetNum;

    /**
     * @description The tags of the ATT\&CK attack.
     *
     * @example ["T1595.002 Vulnerability Scanning"]
     *
     * @var string[]
     */
    public $attCkLabels;

    /**
     * @description The sources of the alert.
     *
     * @example [sas,waf]
     *
     * @var string[]
     */
    public $dataSources;

    /**
     * @description The description of the event.
     *
     * @example The threat event contains 13 Miner Network,1 Execute suspicious encoded commands on Linux, etc
     *
     * @var string
     */
    public $description;

    /**
     * @description The event description in English.
     *
     * @example The threat event contains 13 Miner Network,1 Execute suspicious encoded commands on Linux, etc
     *
     * @var string
     */
    public $descriptionEn;

    /**
     * @description The extended event information in the JSON format.
     *
     * @example {"event_transfer_type":"customize_rule"}
     *
     * @var string
     */
    public $extContent;

    /**
     * @description The time when the event occurred.
     *
     * @example 2021-01-06 16:37:29
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The time when the event was last updated.
     *
     * @example 2021-01-06 16:37:29
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The name of the event.
     *
     * @example Multiple type of alerts, including Miner Network, Command line download and run malicious files, Backdoor Process, etc
     *
     * @var string
     */
    public $incidentName;

    /**
     * @description The event name in English.
     *
     * @example Multiple type of alerts, including Miner Network, Command line download and run malicious files, Backdoor Process, etc
     *
     * @var string
     */
    public $incidentNameEn;

    /**
     * @description The UUID of the event.
     *
     * @example 85ea4241-798f-4684-a876-65d4f0c3****
     *
     * @var string
     */
    public $incidentUuid;

    /**
     * @var string
     */
    public $referAccount;

    /**
     * @description The remarks of the event.
     *
     * @example dealed
     *
     * @var string
     */
    public $remark;

    /**
     * @description The status of the event. Valid values:
     *
     *   0: unhandled
     *   1: handling
     *   5: handling failed
     *   10: handled
     *
     * @example 0
     *
     * @var int
     */
    public $status;

    /**
     * @description The risk level. Valid values:
     *
     *   serious: high
     *   suspicious: medium
     *   remind: low
     *
     * @example remind
     *
     * @var string
     */
    public $threatLevel;

    /**
     * @description The risk score of the event. Valid values: 0 to 100. A higher value indicates a higher risk level.
     *
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
        'referAccount'   => 'ReferAccount',
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
        if (null !== $this->referAccount) {
            $res['ReferAccount'] = $this->referAccount;
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
     * @return responseData
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
        if (isset($map['ReferAccount'])) {
            $model->referAccount = $map['ReferAccount'];
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
