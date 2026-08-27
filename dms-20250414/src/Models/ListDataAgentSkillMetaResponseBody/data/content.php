<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models\ListDataAgentSkillMetaResponseBody\data;

use AlibabaCloud\Dara\Model;

class content extends Model
{
    /**
     * @var string
     */
    public $aliyunParentUid;

    /**
     * @var string
     */
    public $aliyunUid;

    /**
     * @var string
     */
    public $creatorUserName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $enabled;

    /**
     * @var string
     */
    public $gmtCreated;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $parseError;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $skillFrom;

    /**
     * @var string
     */
    public $skillId;

    /**
     * @var string
     */
    public $skillName;

    /**
     * @var string
     */
    public $skillStatus;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'aliyunParentUid' => 'AliyunParentUid',
        'aliyunUid' => 'AliyunUid',
        'creatorUserName' => 'CreatorUserName',
        'description' => 'Description',
        'enabled' => 'Enabled',
        'gmtCreated' => 'GmtCreated',
        'gmtModified' => 'GmtModified',
        'parseError' => 'ParseError',
        'region' => 'Region',
        'skillFrom' => 'SkillFrom',
        'skillId' => 'SkillId',
        'skillName' => 'SkillName',
        'skillStatus' => 'SkillStatus',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliyunParentUid) {
            $res['AliyunParentUid'] = $this->aliyunParentUid;
        }

        if (null !== $this->aliyunUid) {
            $res['AliyunUid'] = $this->aliyunUid;
        }

        if (null !== $this->creatorUserName) {
            $res['CreatorUserName'] = $this->creatorUserName;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }

        if (null !== $this->gmtCreated) {
            $res['GmtCreated'] = $this->gmtCreated;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->parseError) {
            $res['ParseError'] = $this->parseError;
        }

        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        if (null !== $this->skillFrom) {
            $res['SkillFrom'] = $this->skillFrom;
        }

        if (null !== $this->skillId) {
            $res['SkillId'] = $this->skillId;
        }

        if (null !== $this->skillName) {
            $res['SkillName'] = $this->skillName;
        }

        if (null !== $this->skillStatus) {
            $res['SkillStatus'] = $this->skillStatus;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['AliyunParentUid'])) {
            $model->aliyunParentUid = $map['AliyunParentUid'];
        }

        if (isset($map['AliyunUid'])) {
            $model->aliyunUid = $map['AliyunUid'];
        }

        if (isset($map['CreatorUserName'])) {
            $model->creatorUserName = $map['CreatorUserName'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }

        if (isset($map['GmtCreated'])) {
            $model->gmtCreated = $map['GmtCreated'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['ParseError'])) {
            $model->parseError = $map['ParseError'];
        }

        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        if (isset($map['SkillFrom'])) {
            $model->skillFrom = $map['SkillFrom'];
        }

        if (isset($map['SkillId'])) {
            $model->skillId = $map['SkillId'];
        }

        if (isset($map['SkillName'])) {
            $model->skillName = $map['SkillName'];
        }

        if (isset($map['SkillStatus'])) {
            $model->skillStatus = $map['SkillStatus'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
