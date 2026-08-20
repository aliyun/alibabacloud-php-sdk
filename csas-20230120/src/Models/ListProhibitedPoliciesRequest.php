<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListProhibitedPoliciesRequest\softwareId;

class ListProhibitedPoliciesRequest extends Model
{
    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var string
     */
    public $matchMode;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $objectType;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string[]
     */
    public $policyIds;

    /**
     * @var string
     */
    public $policyType;

    /**
     * @var softwareId
     */
    public $softwareId;

    /**
     * @var string
     */
    public $softwareName;

    /**
     * @var string
     */
    public $tagId;

    /**
     * @var string
     */
    public $tagName;

    /**
     * @var string
     */
    public $userGroupId;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'enabled' => 'Enabled',
        'matchMode' => 'MatchMode',
        'name' => 'Name',
        'objectType' => 'ObjectType',
        'pageSize' => 'PageSize',
        'policyIds' => 'PolicyIds',
        'policyType' => 'PolicyType',
        'softwareId' => 'SoftwareId',
        'softwareName' => 'SoftwareName',
        'tagId' => 'TagId',
        'tagName' => 'TagName',
        'userGroupId' => 'UserGroupId',
    ];

    public function validate()
    {
        if (\is_array($this->policyIds)) {
            Model::validateArray($this->policyIds);
        }
        if (null !== $this->softwareId) {
            $this->softwareId->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }

        if (null !== $this->matchMode) {
            $res['MatchMode'] = $this->matchMode;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->objectType) {
            $res['ObjectType'] = $this->objectType;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->policyIds) {
            if (\is_array($this->policyIds)) {
                $res['PolicyIds'] = [];
                $n1 = 0;
                foreach ($this->policyIds as $item1) {
                    $res['PolicyIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->policyType) {
            $res['PolicyType'] = $this->policyType;
        }

        if (null !== $this->softwareId) {
            $res['SoftwareId'] = null !== $this->softwareId ? $this->softwareId->toArray($noStream) : $this->softwareId;
        }

        if (null !== $this->softwareName) {
            $res['SoftwareName'] = $this->softwareName;
        }

        if (null !== $this->tagId) {
            $res['TagId'] = $this->tagId;
        }

        if (null !== $this->tagName) {
            $res['TagName'] = $this->tagName;
        }

        if (null !== $this->userGroupId) {
            $res['UserGroupId'] = $this->userGroupId;
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
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }

        if (isset($map['MatchMode'])) {
            $model->matchMode = $map['MatchMode'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['ObjectType'])) {
            $model->objectType = $map['ObjectType'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['PolicyIds'])) {
            if (!empty($map['PolicyIds'])) {
                $model->policyIds = [];
                $n1 = 0;
                foreach ($map['PolicyIds'] as $item1) {
                    $model->policyIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['PolicyType'])) {
            $model->policyType = $map['PolicyType'];
        }

        if (isset($map['SoftwareId'])) {
            $model->softwareId = softwareId::fromMap($map['SoftwareId']);
        }

        if (isset($map['SoftwareName'])) {
            $model->softwareName = $map['SoftwareName'];
        }

        if (isset($map['TagId'])) {
            $model->tagId = $map['TagId'];
        }

        if (isset($map['TagName'])) {
            $model->tagName = $map['TagName'];
        }

        if (isset($map['UserGroupId'])) {
            $model->userGroupId = $map['UserGroupId'];
        }

        return $model;
    }
}
