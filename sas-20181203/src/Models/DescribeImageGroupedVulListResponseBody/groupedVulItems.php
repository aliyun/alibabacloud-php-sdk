<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageGroupedVulListResponseBody;

use AlibabaCloud\Dara\Model;

class groupedVulItems extends Model
{
    /**
     * @var string
     */
    public $agentlessCanFix;

    /**
     * @var string
     */
    public $aliasName;

    /**
     * @var int
     */
    public $asapCount;

    /**
     * @var string
     */
    public $canFix;

    /**
     * @var string
     */
    public $cveScore;

    /**
     * @var int
     */
    public $gmtLast;

    /**
     * @var int
     */
    public $lastScanTime;

    /**
     * @var int
     */
    public $laterCount;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $nntfCount;

    /**
     * @var string
     */
    public $related;

    /**
     * @var string
     */
    public $ruleTag;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $tags;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'agentlessCanFix' => 'AgentlessCanFix',
        'aliasName' => 'AliasName',
        'asapCount' => 'AsapCount',
        'canFix' => 'CanFix',
        'cveScore' => 'CveScore',
        'gmtLast' => 'GmtLast',
        'lastScanTime' => 'LastScanTime',
        'laterCount' => 'LaterCount',
        'name' => 'Name',
        'nntfCount' => 'NntfCount',
        'related' => 'Related',
        'ruleTag' => 'RuleTag',
        'status' => 'Status',
        'tags' => 'Tags',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentlessCanFix) {
            $res['AgentlessCanFix'] = $this->agentlessCanFix;
        }

        if (null !== $this->aliasName) {
            $res['AliasName'] = $this->aliasName;
        }

        if (null !== $this->asapCount) {
            $res['AsapCount'] = $this->asapCount;
        }

        if (null !== $this->canFix) {
            $res['CanFix'] = $this->canFix;
        }

        if (null !== $this->cveScore) {
            $res['CveScore'] = $this->cveScore;
        }

        if (null !== $this->gmtLast) {
            $res['GmtLast'] = $this->gmtLast;
        }

        if (null !== $this->lastScanTime) {
            $res['LastScanTime'] = $this->lastScanTime;
        }

        if (null !== $this->laterCount) {
            $res['LaterCount'] = $this->laterCount;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->nntfCount) {
            $res['NntfCount'] = $this->nntfCount;
        }

        if (null !== $this->related) {
            $res['Related'] = $this->related;
        }

        if (null !== $this->ruleTag) {
            $res['RuleTag'] = $this->ruleTag;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
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
        if (isset($map['AgentlessCanFix'])) {
            $model->agentlessCanFix = $map['AgentlessCanFix'];
        }

        if (isset($map['AliasName'])) {
            $model->aliasName = $map['AliasName'];
        }

        if (isset($map['AsapCount'])) {
            $model->asapCount = $map['AsapCount'];
        }

        if (isset($map['CanFix'])) {
            $model->canFix = $map['CanFix'];
        }

        if (isset($map['CveScore'])) {
            $model->cveScore = $map['CveScore'];
        }

        if (isset($map['GmtLast'])) {
            $model->gmtLast = $map['GmtLast'];
        }

        if (isset($map['LastScanTime'])) {
            $model->lastScanTime = $map['LastScanTime'];
        }

        if (isset($map['LaterCount'])) {
            $model->laterCount = $map['LaterCount'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['NntfCount'])) {
            $model->nntfCount = $map['NntfCount'];
        }

        if (isset($map['Related'])) {
            $model->related = $map['Related'];
        }

        if (isset($map['RuleTag'])) {
            $model->ruleTag = $map['RuleTag'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
