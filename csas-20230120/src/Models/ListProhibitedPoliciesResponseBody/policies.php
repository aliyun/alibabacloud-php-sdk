<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\ListProhibitedPoliciesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListProhibitedPoliciesResponseBody\policies\softwareIds;

class policies extends Model
{
    /**
     * @var bool
     */
    public $allowReport;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var bool
     */
    public $forceKill;

    /**
     * @var string
     */
    public $mainButtonTextCh;

    /**
     * @var string
     */
    public $mainButtonTextEn;

    /**
     * @var string
     */
    public $matchMode;

    /**
     * @var string
     */
    public $minorButtonTextCh;

    /**
     * @var string
     */
    public $minorButtonTextEn;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $objectType;

    /**
     * @var string
     */
    public $policyId;

    /**
     * @var string
     */
    public $policyType;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var string
     */
    public $promptCh;

    /**
     * @var string
     */
    public $promptEn;

    /**
     * @var softwareIds[]
     */
    public $softwareIds;

    /**
     * @var string[]
     */
    public $tagIds;

    /**
     * @var string
     */
    public $titleCh;

    /**
     * @var string
     */
    public $titleEn;

    /**
     * @var string[]
     */
    public $userGroupIds;

    /**
     * @var string[]
     */
    public $whitelist;
    protected $_name = [
        'allowReport' => 'AllowReport',
        'createTime' => 'CreateTime',
        'description' => 'Description',
        'enabled' => 'Enabled',
        'forceKill' => 'ForceKill',
        'mainButtonTextCh' => 'MainButtonTextCh',
        'mainButtonTextEn' => 'MainButtonTextEn',
        'matchMode' => 'MatchMode',
        'minorButtonTextCh' => 'MinorButtonTextCh',
        'minorButtonTextEn' => 'MinorButtonTextEn',
        'name' => 'Name',
        'objectType' => 'ObjectType',
        'policyId' => 'PolicyId',
        'policyType' => 'PolicyType',
        'priority' => 'Priority',
        'promptCh' => 'PromptCh',
        'promptEn' => 'PromptEn',
        'softwareIds' => 'SoftwareIds',
        'tagIds' => 'TagIds',
        'titleCh' => 'TitleCh',
        'titleEn' => 'TitleEn',
        'userGroupIds' => 'UserGroupIds',
        'whitelist' => 'Whitelist',
    ];

    public function validate()
    {
        if (\is_array($this->softwareIds)) {
            Model::validateArray($this->softwareIds);
        }
        if (\is_array($this->tagIds)) {
            Model::validateArray($this->tagIds);
        }
        if (\is_array($this->userGroupIds)) {
            Model::validateArray($this->userGroupIds);
        }
        if (\is_array($this->whitelist)) {
            Model::validateArray($this->whitelist);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowReport) {
            $res['AllowReport'] = $this->allowReport;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }

        if (null !== $this->forceKill) {
            $res['ForceKill'] = $this->forceKill;
        }

        if (null !== $this->mainButtonTextCh) {
            $res['MainButtonTextCh'] = $this->mainButtonTextCh;
        }

        if (null !== $this->mainButtonTextEn) {
            $res['MainButtonTextEn'] = $this->mainButtonTextEn;
        }

        if (null !== $this->matchMode) {
            $res['MatchMode'] = $this->matchMode;
        }

        if (null !== $this->minorButtonTextCh) {
            $res['MinorButtonTextCh'] = $this->minorButtonTextCh;
        }

        if (null !== $this->minorButtonTextEn) {
            $res['MinorButtonTextEn'] = $this->minorButtonTextEn;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->objectType) {
            $res['ObjectType'] = $this->objectType;
        }

        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }

        if (null !== $this->policyType) {
            $res['PolicyType'] = $this->policyType;
        }

        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }

        if (null !== $this->promptCh) {
            $res['PromptCh'] = $this->promptCh;
        }

        if (null !== $this->promptEn) {
            $res['PromptEn'] = $this->promptEn;
        }

        if (null !== $this->softwareIds) {
            if (\is_array($this->softwareIds)) {
                $res['SoftwareIds'] = [];
                $n1 = 0;
                foreach ($this->softwareIds as $item1) {
                    $res['SoftwareIds'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->tagIds) {
            if (\is_array($this->tagIds)) {
                $res['TagIds'] = [];
                $n1 = 0;
                foreach ($this->tagIds as $item1) {
                    $res['TagIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->titleCh) {
            $res['TitleCh'] = $this->titleCh;
        }

        if (null !== $this->titleEn) {
            $res['TitleEn'] = $this->titleEn;
        }

        if (null !== $this->userGroupIds) {
            if (\is_array($this->userGroupIds)) {
                $res['UserGroupIds'] = [];
                $n1 = 0;
                foreach ($this->userGroupIds as $item1) {
                    $res['UserGroupIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->whitelist) {
            if (\is_array($this->whitelist)) {
                $res['Whitelist'] = [];
                $n1 = 0;
                foreach ($this->whitelist as $item1) {
                    $res['Whitelist'][$n1] = $item1;
                    ++$n1;
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
        if (isset($map['AllowReport'])) {
            $model->allowReport = $map['AllowReport'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }

        if (isset($map['ForceKill'])) {
            $model->forceKill = $map['ForceKill'];
        }

        if (isset($map['MainButtonTextCh'])) {
            $model->mainButtonTextCh = $map['MainButtonTextCh'];
        }

        if (isset($map['MainButtonTextEn'])) {
            $model->mainButtonTextEn = $map['MainButtonTextEn'];
        }

        if (isset($map['MatchMode'])) {
            $model->matchMode = $map['MatchMode'];
        }

        if (isset($map['MinorButtonTextCh'])) {
            $model->minorButtonTextCh = $map['MinorButtonTextCh'];
        }

        if (isset($map['MinorButtonTextEn'])) {
            $model->minorButtonTextEn = $map['MinorButtonTextEn'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['ObjectType'])) {
            $model->objectType = $map['ObjectType'];
        }

        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }

        if (isset($map['PolicyType'])) {
            $model->policyType = $map['PolicyType'];
        }

        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        if (isset($map['PromptCh'])) {
            $model->promptCh = $map['PromptCh'];
        }

        if (isset($map['PromptEn'])) {
            $model->promptEn = $map['PromptEn'];
        }

        if (isset($map['SoftwareIds'])) {
            if (!empty($map['SoftwareIds'])) {
                $model->softwareIds = [];
                $n1 = 0;
                foreach ($map['SoftwareIds'] as $item1) {
                    $model->softwareIds[$n1] = softwareIds::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TagIds'])) {
            if (!empty($map['TagIds'])) {
                $model->tagIds = [];
                $n1 = 0;
                foreach ($map['TagIds'] as $item1) {
                    $model->tagIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['TitleCh'])) {
            $model->titleCh = $map['TitleCh'];
        }

        if (isset($map['TitleEn'])) {
            $model->titleEn = $map['TitleEn'];
        }

        if (isset($map['UserGroupIds'])) {
            if (!empty($map['UserGroupIds'])) {
                $model->userGroupIds = [];
                $n1 = 0;
                foreach ($map['UserGroupIds'] as $item1) {
                    $model->userGroupIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Whitelist'])) {
            if (!empty($map['Whitelist'])) {
                $model->whitelist = [];
                $n1 = 0;
                foreach ($map['Whitelist'] as $item1) {
                    $model->whitelist[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
