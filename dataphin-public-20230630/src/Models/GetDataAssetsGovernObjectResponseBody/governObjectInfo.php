<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetDataAssetsGovernObjectResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetDataAssetsGovernObjectResponseBody\governObjectInfo\owners;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetDataAssetsGovernObjectResponseBody\governObjectInfo\problem;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetDataAssetsGovernObjectResponseBody\governObjectInfo\relatedKnowledge;

class governObjectInfo extends Model
{
    /**
     * @var string
     */
    public $commitTime;

    /**
     * @var int
     */
    public $governItemId;

    /**
     * @var int
     */
    public $governObjectId;

    /**
     * @var bool
     */
    public $isRectify;

    /**
     * @var owners[]
     */
    public $owners;

    /**
     * @var problem
     */
    public $problem;

    /**
     * @var mixed[]
     */
    public $properties;

    /**
     * @var int
     */
    public $rectifyId;

    /**
     * @var string
     */
    public $rectifyName;

    /**
     * @var string
     */
    public $rectifyStatus;

    /**
     * @var string
     */
    public $rectifyUser;

    /**
     * @var string
     */
    public $rectifyUserName;

    /**
     * @var relatedKnowledge[]
     */
    public $relatedKnowledge;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $submitType;

    /**
     * @var int
     */
    public $tenantId;
    protected $_name = [
        'commitTime' => 'CommitTime',
        'governItemId' => 'GovernItemId',
        'governObjectId' => 'GovernObjectId',
        'isRectify' => 'IsRectify',
        'owners' => 'Owners',
        'problem' => 'Problem',
        'properties' => 'Properties',
        'rectifyId' => 'RectifyId',
        'rectifyName' => 'RectifyName',
        'rectifyStatus' => 'RectifyStatus',
        'rectifyUser' => 'RectifyUser',
        'rectifyUserName' => 'RectifyUserName',
        'relatedKnowledge' => 'RelatedKnowledge',
        'status' => 'Status',
        'submitType' => 'SubmitType',
        'tenantId' => 'TenantId',
    ];

    public function validate()
    {
        if (\is_array($this->owners)) {
            Model::validateArray($this->owners);
        }
        if (null !== $this->problem) {
            $this->problem->validate();
        }
        if (\is_array($this->properties)) {
            Model::validateArray($this->properties);
        }
        if (\is_array($this->relatedKnowledge)) {
            Model::validateArray($this->relatedKnowledge);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->commitTime) {
            $res['CommitTime'] = $this->commitTime;
        }

        if (null !== $this->governItemId) {
            $res['GovernItemId'] = $this->governItemId;
        }

        if (null !== $this->governObjectId) {
            $res['GovernObjectId'] = $this->governObjectId;
        }

        if (null !== $this->isRectify) {
            $res['IsRectify'] = $this->isRectify;
        }

        if (null !== $this->owners) {
            if (\is_array($this->owners)) {
                $res['Owners'] = [];
                $n1 = 0;
                foreach ($this->owners as $item1) {
                    $res['Owners'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->problem) {
            $res['Problem'] = null !== $this->problem ? $this->problem->toArray($noStream) : $this->problem;
        }

        if (null !== $this->properties) {
            if (\is_array($this->properties)) {
                $res['Properties'] = [];
                foreach ($this->properties as $key1 => $value1) {
                    $res['Properties'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->rectifyId) {
            $res['RectifyId'] = $this->rectifyId;
        }

        if (null !== $this->rectifyName) {
            $res['RectifyName'] = $this->rectifyName;
        }

        if (null !== $this->rectifyStatus) {
            $res['RectifyStatus'] = $this->rectifyStatus;
        }

        if (null !== $this->rectifyUser) {
            $res['RectifyUser'] = $this->rectifyUser;
        }

        if (null !== $this->rectifyUserName) {
            $res['RectifyUserName'] = $this->rectifyUserName;
        }

        if (null !== $this->relatedKnowledge) {
            if (\is_array($this->relatedKnowledge)) {
                $res['RelatedKnowledge'] = [];
                $n1 = 0;
                foreach ($this->relatedKnowledge as $item1) {
                    $res['RelatedKnowledge'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->submitType) {
            $res['SubmitType'] = $this->submitType;
        }

        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
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
        if (isset($map['CommitTime'])) {
            $model->commitTime = $map['CommitTime'];
        }

        if (isset($map['GovernItemId'])) {
            $model->governItemId = $map['GovernItemId'];
        }

        if (isset($map['GovernObjectId'])) {
            $model->governObjectId = $map['GovernObjectId'];
        }

        if (isset($map['IsRectify'])) {
            $model->isRectify = $map['IsRectify'];
        }

        if (isset($map['Owners'])) {
            if (!empty($map['Owners'])) {
                $model->owners = [];
                $n1 = 0;
                foreach ($map['Owners'] as $item1) {
                    $model->owners[$n1] = owners::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Problem'])) {
            $model->problem = problem::fromMap($map['Problem']);
        }

        if (isset($map['Properties'])) {
            if (!empty($map['Properties'])) {
                $model->properties = [];
                foreach ($map['Properties'] as $key1 => $value1) {
                    $model->properties[$key1] = $value1;
                }
            }
        }

        if (isset($map['RectifyId'])) {
            $model->rectifyId = $map['RectifyId'];
        }

        if (isset($map['RectifyName'])) {
            $model->rectifyName = $map['RectifyName'];
        }

        if (isset($map['RectifyStatus'])) {
            $model->rectifyStatus = $map['RectifyStatus'];
        }

        if (isset($map['RectifyUser'])) {
            $model->rectifyUser = $map['RectifyUser'];
        }

        if (isset($map['RectifyUserName'])) {
            $model->rectifyUserName = $map['RectifyUserName'];
        }

        if (isset($map['RelatedKnowledge'])) {
            if (!empty($map['RelatedKnowledge'])) {
                $model->relatedKnowledge = [];
                $n1 = 0;
                foreach ($map['RelatedKnowledge'] as $item1) {
                    $model->relatedKnowledge[$n1] = relatedKnowledge::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['SubmitType'])) {
            $model->submitType = $map['SubmitType'];
        }

        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
