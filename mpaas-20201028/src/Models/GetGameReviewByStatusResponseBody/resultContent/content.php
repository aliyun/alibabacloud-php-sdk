<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models\GetGameReviewByStatusResponseBody\resultContent;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\GetGameReviewByStatusResponseBody\resultContent\content\reviewProgress;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\GetGameReviewByStatusResponseBody\resultContent\content\targetDetail;

class content extends Model
{
    /**
     * @var string
     */
    public $appendix;

    /**
     * @var bool
     */
    public $autoOnline;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var string
     */
    public $extension;

    /**
     * @var int
     */
    public $flowId;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string[]
     */
    public $icons;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $reviewChannel;

    /**
     * @var int
     */
    public $reviewIntegerStatus;

    /**
     * @var reviewProgress[]
     */
    public $reviewProgress;

    /**
     * @var string
     */
    public $reviewStatus;

    /**
     * @var int
     */
    public $reviewTarget;

    /**
     * @var targetDetail
     */
    public $targetDetail;

    /**
     * @var string
     */
    public $targetType;
    protected $_name = [
        'appendix' => 'Appendix',
        'autoOnline' => 'AutoOnline',
        'creator' => 'Creator',
        'extension' => 'Extension',
        'flowId' => 'FlowId',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'icons' => 'Icons',
        'id' => 'Id',
        'reviewChannel' => 'ReviewChannel',
        'reviewIntegerStatus' => 'ReviewIntegerStatus',
        'reviewProgress' => 'ReviewProgress',
        'reviewStatus' => 'ReviewStatus',
        'reviewTarget' => 'ReviewTarget',
        'targetDetail' => 'TargetDetail',
        'targetType' => 'TargetType',
    ];

    public function validate()
    {
        if (\is_array($this->icons)) {
            Model::validateArray($this->icons);
        }
        if (\is_array($this->reviewProgress)) {
            Model::validateArray($this->reviewProgress);
        }
        if (null !== $this->targetDetail) {
            $this->targetDetail->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appendix) {
            $res['Appendix'] = $this->appendix;
        }

        if (null !== $this->autoOnline) {
            $res['AutoOnline'] = $this->autoOnline;
        }

        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }

        if (null !== $this->extension) {
            $res['Extension'] = $this->extension;
        }

        if (null !== $this->flowId) {
            $res['FlowId'] = $this->flowId;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->icons) {
            if (\is_array($this->icons)) {
                $res['Icons'] = [];
                $n1 = 0;
                foreach ($this->icons as $item1) {
                    $res['Icons'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->reviewChannel) {
            $res['ReviewChannel'] = $this->reviewChannel;
        }

        if (null !== $this->reviewIntegerStatus) {
            $res['ReviewIntegerStatus'] = $this->reviewIntegerStatus;
        }

        if (null !== $this->reviewProgress) {
            if (\is_array($this->reviewProgress)) {
                $res['ReviewProgress'] = [];
                $n1 = 0;
                foreach ($this->reviewProgress as $item1) {
                    $res['ReviewProgress'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->reviewStatus) {
            $res['ReviewStatus'] = $this->reviewStatus;
        }

        if (null !== $this->reviewTarget) {
            $res['ReviewTarget'] = $this->reviewTarget;
        }

        if (null !== $this->targetDetail) {
            $res['TargetDetail'] = null !== $this->targetDetail ? $this->targetDetail->toArray($noStream) : $this->targetDetail;
        }

        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
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
        if (isset($map['Appendix'])) {
            $model->appendix = $map['Appendix'];
        }

        if (isset($map['AutoOnline'])) {
            $model->autoOnline = $map['AutoOnline'];
        }

        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }

        if (isset($map['Extension'])) {
            $model->extension = $map['Extension'];
        }

        if (isset($map['FlowId'])) {
            $model->flowId = $map['FlowId'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['Icons'])) {
            if (!empty($map['Icons'])) {
                $model->icons = [];
                $n1 = 0;
                foreach ($map['Icons'] as $item1) {
                    $model->icons[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['ReviewChannel'])) {
            $model->reviewChannel = $map['ReviewChannel'];
        }

        if (isset($map['ReviewIntegerStatus'])) {
            $model->reviewIntegerStatus = $map['ReviewIntegerStatus'];
        }

        if (isset($map['ReviewProgress'])) {
            if (!empty($map['ReviewProgress'])) {
                $model->reviewProgress = [];
                $n1 = 0;
                foreach ($map['ReviewProgress'] as $item1) {
                    $model->reviewProgress[$n1] = reviewProgress::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ReviewStatus'])) {
            $model->reviewStatus = $map['ReviewStatus'];
        }

        if (isset($map['ReviewTarget'])) {
            $model->reviewTarget = $map['ReviewTarget'];
        }

        if (isset($map['TargetDetail'])) {
            $model->targetDetail = targetDetail::fromMap($map['TargetDetail']);
        }

        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }

        return $model;
    }
}
