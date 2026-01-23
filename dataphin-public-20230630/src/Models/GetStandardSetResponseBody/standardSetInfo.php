<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetStandardSetResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetStandardSetResponseBody\standardSetInfo\approvalConfig;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetStandardSetResponseBody\standardSetInfo\creator;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetStandardSetResponseBody\standardSetInfo\directoryReference;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetStandardSetResponseBody\standardSetInfo\lastModifier;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetStandardSetResponseBody\standardSetInfo\maintainerList;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetStandardSetResponseBody\standardSetInfo\memberGroupList;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetStandardSetResponseBody\standardSetInfo\memberList;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetStandardSetResponseBody\standardSetInfo\offlineApprovalConfig;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetStandardSetResponseBody\standardSetInfo\visibilityConfig;

class standardSetInfo extends Model
{
    /**
     * @var approvalConfig
     */
    public $approvalConfig;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var creator
     */
    public $creator;

    /**
     * @var int
     */
    public $defaultStandardTemplateId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var directoryReference
     */
    public $directoryReference;

    /**
     * @var int
     */
    public $id;

    /**
     * @var lastModifier
     */
    public $lastModifier;

    /**
     * @var maintainerList[]
     */
    public $maintainerList;

    /**
     * @var memberGroupList[]
     */
    public $memberGroupList;

    /**
     * @var memberList[]
     */
    public $memberList;

    /**
     * @var string
     */
    public $modifyTime;

    /**
     * @var string
     */
    public $name;

    /**
     * @var offlineApprovalConfig
     */
    public $offlineApprovalConfig;

    /**
     * @var visibilityConfig
     */
    public $visibilityConfig;
    protected $_name = [
        'approvalConfig' => 'ApprovalConfig',
        'code' => 'Code',
        'createTime' => 'CreateTime',
        'creator' => 'Creator',
        'defaultStandardTemplateId' => 'DefaultStandardTemplateId',
        'description' => 'Description',
        'directoryReference' => 'DirectoryReference',
        'id' => 'Id',
        'lastModifier' => 'LastModifier',
        'maintainerList' => 'MaintainerList',
        'memberGroupList' => 'MemberGroupList',
        'memberList' => 'MemberList',
        'modifyTime' => 'ModifyTime',
        'name' => 'Name',
        'offlineApprovalConfig' => 'OfflineApprovalConfig',
        'visibilityConfig' => 'VisibilityConfig',
    ];

    public function validate()
    {
        if (null !== $this->approvalConfig) {
            $this->approvalConfig->validate();
        }
        if (null !== $this->creator) {
            $this->creator->validate();
        }
        if (null !== $this->directoryReference) {
            $this->directoryReference->validate();
        }
        if (null !== $this->lastModifier) {
            $this->lastModifier->validate();
        }
        if (\is_array($this->maintainerList)) {
            Model::validateArray($this->maintainerList);
        }
        if (\is_array($this->memberGroupList)) {
            Model::validateArray($this->memberGroupList);
        }
        if (\is_array($this->memberList)) {
            Model::validateArray($this->memberList);
        }
        if (null !== $this->offlineApprovalConfig) {
            $this->offlineApprovalConfig->validate();
        }
        if (null !== $this->visibilityConfig) {
            $this->visibilityConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->approvalConfig) {
            $res['ApprovalConfig'] = null !== $this->approvalConfig ? $this->approvalConfig->toArray($noStream) : $this->approvalConfig;
        }

        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->creator) {
            $res['Creator'] = null !== $this->creator ? $this->creator->toArray($noStream) : $this->creator;
        }

        if (null !== $this->defaultStandardTemplateId) {
            $res['DefaultStandardTemplateId'] = $this->defaultStandardTemplateId;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->directoryReference) {
            $res['DirectoryReference'] = null !== $this->directoryReference ? $this->directoryReference->toArray($noStream) : $this->directoryReference;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->lastModifier) {
            $res['LastModifier'] = null !== $this->lastModifier ? $this->lastModifier->toArray($noStream) : $this->lastModifier;
        }

        if (null !== $this->maintainerList) {
            if (\is_array($this->maintainerList)) {
                $res['MaintainerList'] = [];
                $n1 = 0;
                foreach ($this->maintainerList as $item1) {
                    $res['MaintainerList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->memberGroupList) {
            if (\is_array($this->memberGroupList)) {
                $res['MemberGroupList'] = [];
                $n1 = 0;
                foreach ($this->memberGroupList as $item1) {
                    $res['MemberGroupList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->memberList) {
            if (\is_array($this->memberList)) {
                $res['MemberList'] = [];
                $n1 = 0;
                foreach ($this->memberList as $item1) {
                    $res['MemberList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->offlineApprovalConfig) {
            $res['OfflineApprovalConfig'] = null !== $this->offlineApprovalConfig ? $this->offlineApprovalConfig->toArray($noStream) : $this->offlineApprovalConfig;
        }

        if (null !== $this->visibilityConfig) {
            $res['VisibilityConfig'] = null !== $this->visibilityConfig ? $this->visibilityConfig->toArray($noStream) : $this->visibilityConfig;
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
        if (isset($map['ApprovalConfig'])) {
            $model->approvalConfig = approvalConfig::fromMap($map['ApprovalConfig']);
        }

        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Creator'])) {
            $model->creator = creator::fromMap($map['Creator']);
        }

        if (isset($map['DefaultStandardTemplateId'])) {
            $model->defaultStandardTemplateId = $map['DefaultStandardTemplateId'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DirectoryReference'])) {
            $model->directoryReference = directoryReference::fromMap($map['DirectoryReference']);
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['LastModifier'])) {
            $model->lastModifier = lastModifier::fromMap($map['LastModifier']);
        }

        if (isset($map['MaintainerList'])) {
            if (!empty($map['MaintainerList'])) {
                $model->maintainerList = [];
                $n1 = 0;
                foreach ($map['MaintainerList'] as $item1) {
                    $model->maintainerList[$n1] = maintainerList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['MemberGroupList'])) {
            if (!empty($map['MemberGroupList'])) {
                $model->memberGroupList = [];
                $n1 = 0;
                foreach ($map['MemberGroupList'] as $item1) {
                    $model->memberGroupList[$n1] = memberGroupList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['MemberList'])) {
            if (!empty($map['MemberList'])) {
                $model->memberList = [];
                $n1 = 0;
                foreach ($map['MemberList'] as $item1) {
                    $model->memberList[$n1] = memberList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['OfflineApprovalConfig'])) {
            $model->offlineApprovalConfig = offlineApprovalConfig::fromMap($map['OfflineApprovalConfig']);
        }

        if (isset($map['VisibilityConfig'])) {
            $model->visibilityConfig = visibilityConfig::fromMap($map['VisibilityConfig']);
        }

        return $model;
    }
}
