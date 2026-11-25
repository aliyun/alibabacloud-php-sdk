<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeAclCheckResponseBody\checkRecord;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeAclCheckResponseBody\checkRecord\acls\acl;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeAclCheckResponseBody\checkRecord\acls\recommendOptions;

class acls extends Model
{
    /**
     * @var acl
     */
    public $acl;

    /**
     * @var string
     */
    public $aclAssessmentDetail;

    /**
     * @var string
     */
    public $aclStatus;

    /**
     * @var string
     */
    public $actionType;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string
     */
    public $processStatus;

    /**
     * @var recommendOptions[]
     */
    public $recommendOptions;
    protected $_name = [
        'acl' => 'Acl',
        'aclAssessmentDetail' => 'AclAssessmentDetail',
        'aclStatus' => 'AclStatus',
        'actionType' => 'ActionType',
        'errorMessage' => 'ErrorMessage',
        'processStatus' => 'ProcessStatus',
        'recommendOptions' => 'RecommendOptions',
    ];

    public function validate()
    {
        if (null !== $this->acl) {
            $this->acl->validate();
        }
        if (\is_array($this->recommendOptions)) {
            Model::validateArray($this->recommendOptions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acl) {
            $res['Acl'] = null !== $this->acl ? $this->acl->toArray($noStream) : $this->acl;
        }

        if (null !== $this->aclAssessmentDetail) {
            $res['AclAssessmentDetail'] = $this->aclAssessmentDetail;
        }

        if (null !== $this->aclStatus) {
            $res['AclStatus'] = $this->aclStatus;
        }

        if (null !== $this->actionType) {
            $res['ActionType'] = $this->actionType;
        }

        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }

        if (null !== $this->processStatus) {
            $res['ProcessStatus'] = $this->processStatus;
        }

        if (null !== $this->recommendOptions) {
            if (\is_array($this->recommendOptions)) {
                $res['RecommendOptions'] = [];
                $n1 = 0;
                foreach ($this->recommendOptions as $item1) {
                    $res['RecommendOptions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Acl'])) {
            $model->acl = acl::fromMap($map['Acl']);
        }

        if (isset($map['AclAssessmentDetail'])) {
            $model->aclAssessmentDetail = $map['AclAssessmentDetail'];
        }

        if (isset($map['AclStatus'])) {
            $model->aclStatus = $map['AclStatus'];
        }

        if (isset($map['ActionType'])) {
            $model->actionType = $map['ActionType'];
        }

        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }

        if (isset($map['ProcessStatus'])) {
            $model->processStatus = $map['ProcessStatus'];
        }

        if (isset($map['RecommendOptions'])) {
            if (!empty($map['RecommendOptions'])) {
                $model->recommendOptions = [];
                $n1 = 0;
                foreach ($map['RecommendOptions'] as $item1) {
                    $model->recommendOptions[$n1] = recommendOptions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
