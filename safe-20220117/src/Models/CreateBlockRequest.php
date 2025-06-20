<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Safe\V20220117\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Safe\V20220117\Models\CreateBlockRequest\approveStrategyNodes;
use AlibabaCloud\SDK\Safe\V20220117\Models\CreateBlockRequest\noticeEnclosureInfos;
use AlibabaCloud\SDK\Safe\V20220117\Models\CreateBlockRequest\scopes;

class CreateBlockRequest extends Model
{
    /**
     * @var approveStrategyNodes[]
     */
    public $approveStrategyNodes;

    /**
     * @var int
     */
    public $blockId;

    /**
     * @var string
     */
    public $director;

    /**
     * @var int
     */
    public $isNeedApprove;

    /**
     * @var int
     */
    public $isRecall;

    /**
     * @var int
     */
    public $isTemplate;

    /**
     * @var string
     */
    public $labelName;

    /**
     * @var string
     */
    public $noticeDesc;

    /**
     * @var noticeEnclosureInfos[]
     */
    public $noticeEnclosureInfos;

    /**
     * @var string
     */
    public $noticeRequestLink;

    /**
     * @var int
     */
    public $noticeType;

    /**
     * @var string
     */
    public $reason;

    /**
     * @var int
     */
    public $scene;

    /**
     * @var scopes[]
     */
    public $scopes;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $type;

    /**
     * @var int
     */
    public $versionId;

    /**
     * @var string
     */
    public $creatorEmpId;
    protected $_name = [
        'approveStrategyNodes' => 'ApproveStrategyNodes',
        'blockId' => 'BlockId',
        'director' => 'Director',
        'isNeedApprove' => 'IsNeedApprove',
        'isRecall' => 'IsRecall',
        'isTemplate' => 'IsTemplate',
        'labelName' => 'LabelName',
        'noticeDesc' => 'NoticeDesc',
        'noticeEnclosureInfos' => 'NoticeEnclosureInfos',
        'noticeRequestLink' => 'NoticeRequestLink',
        'noticeType' => 'NoticeType',
        'reason' => 'Reason',
        'scene' => 'Scene',
        'scopes' => 'Scopes',
        'status' => 'Status',
        'title' => 'Title',
        'type' => 'Type',
        'versionId' => 'VersionId',
        'creatorEmpId' => 'creatorEmpId',
    ];

    public function validate()
    {
        if (\is_array($this->approveStrategyNodes)) {
            Model::validateArray($this->approveStrategyNodes);
        }
        if (\is_array($this->noticeEnclosureInfos)) {
            Model::validateArray($this->noticeEnclosureInfos);
        }
        if (\is_array($this->scopes)) {
            Model::validateArray($this->scopes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->approveStrategyNodes) {
            if (\is_array($this->approveStrategyNodes)) {
                $res['ApproveStrategyNodes'] = [];
                $n1 = 0;
                foreach ($this->approveStrategyNodes as $item1) {
                    $res['ApproveStrategyNodes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->blockId) {
            $res['BlockId'] = $this->blockId;
        }

        if (null !== $this->director) {
            $res['Director'] = $this->director;
        }

        if (null !== $this->isNeedApprove) {
            $res['IsNeedApprove'] = $this->isNeedApprove;
        }

        if (null !== $this->isRecall) {
            $res['IsRecall'] = $this->isRecall;
        }

        if (null !== $this->isTemplate) {
            $res['IsTemplate'] = $this->isTemplate;
        }

        if (null !== $this->labelName) {
            $res['LabelName'] = $this->labelName;
        }

        if (null !== $this->noticeDesc) {
            $res['NoticeDesc'] = $this->noticeDesc;
        }

        if (null !== $this->noticeEnclosureInfos) {
            if (\is_array($this->noticeEnclosureInfos)) {
                $res['NoticeEnclosureInfos'] = [];
                $n1 = 0;
                foreach ($this->noticeEnclosureInfos as $item1) {
                    $res['NoticeEnclosureInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->noticeRequestLink) {
            $res['NoticeRequestLink'] = $this->noticeRequestLink;
        }

        if (null !== $this->noticeType) {
            $res['NoticeType'] = $this->noticeType;
        }

        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }

        if (null !== $this->scene) {
            $res['Scene'] = $this->scene;
        }

        if (null !== $this->scopes) {
            if (\is_array($this->scopes)) {
                $res['Scopes'] = [];
                $n1 = 0;
                foreach ($this->scopes as $item1) {
                    $res['Scopes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
        }

        if (null !== $this->creatorEmpId) {
            $res['creatorEmpId'] = $this->creatorEmpId;
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
        if (isset($map['ApproveStrategyNodes'])) {
            if (!empty($map['ApproveStrategyNodes'])) {
                $model->approveStrategyNodes = [];
                $n1 = 0;
                foreach ($map['ApproveStrategyNodes'] as $item1) {
                    $model->approveStrategyNodes[$n1] = approveStrategyNodes::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['BlockId'])) {
            $model->blockId = $map['BlockId'];
        }

        if (isset($map['Director'])) {
            $model->director = $map['Director'];
        }

        if (isset($map['IsNeedApprove'])) {
            $model->isNeedApprove = $map['IsNeedApprove'];
        }

        if (isset($map['IsRecall'])) {
            $model->isRecall = $map['IsRecall'];
        }

        if (isset($map['IsTemplate'])) {
            $model->isTemplate = $map['IsTemplate'];
        }

        if (isset($map['LabelName'])) {
            $model->labelName = $map['LabelName'];
        }

        if (isset($map['NoticeDesc'])) {
            $model->noticeDesc = $map['NoticeDesc'];
        }

        if (isset($map['NoticeEnclosureInfos'])) {
            if (!empty($map['NoticeEnclosureInfos'])) {
                $model->noticeEnclosureInfos = [];
                $n1 = 0;
                foreach ($map['NoticeEnclosureInfos'] as $item1) {
                    $model->noticeEnclosureInfos[$n1] = noticeEnclosureInfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['NoticeRequestLink'])) {
            $model->noticeRequestLink = $map['NoticeRequestLink'];
        }

        if (isset($map['NoticeType'])) {
            $model->noticeType = $map['NoticeType'];
        }

        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }

        if (isset($map['Scene'])) {
            $model->scene = $map['Scene'];
        }

        if (isset($map['Scopes'])) {
            if (!empty($map['Scopes'])) {
                $model->scopes = [];
                $n1 = 0;
                foreach ($map['Scopes'] as $item1) {
                    $model->scopes[$n1] = scopes::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }

        if (isset($map['creatorEmpId'])) {
            $model->creatorEmpId = $map['creatorEmpId'];
        }

        return $model;
    }
}
