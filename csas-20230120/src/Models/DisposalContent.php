<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;

class DisposalContent extends Model
{
    /**
     * @var string
     */
    public $alertContent;

    /**
     * @var string
     */
    public $alertContentEn;

    /**
     * @var string
     */
    public $alertTitle;

    /**
     * @var string
     */
    public $alertTitleEn;

    /**
     * @var string[]
     */
    public $nacDemotionPolicyIds;

    /**
     * @var string
     */
    public $noticeContent;

    /**
     * @var string
     */
    public $noticeContentEn;

    /**
     * @var string[]
     */
    public $notifyActions;

    /**
     * @var string[]
     */
    public $prohibitActions;
    protected $_name = [
        'alertContent' => 'AlertContent',
        'alertContentEn' => 'AlertContentEn',
        'alertTitle' => 'AlertTitle',
        'alertTitleEn' => 'AlertTitleEn',
        'nacDemotionPolicyIds' => 'NacDemotionPolicyIds',
        'noticeContent' => 'NoticeContent',
        'noticeContentEn' => 'NoticeContentEn',
        'notifyActions' => 'NotifyActions',
        'prohibitActions' => 'ProhibitActions',
    ];

    public function validate()
    {
        if (\is_array($this->nacDemotionPolicyIds)) {
            Model::validateArray($this->nacDemotionPolicyIds);
        }
        if (\is_array($this->notifyActions)) {
            Model::validateArray($this->notifyActions);
        }
        if (\is_array($this->prohibitActions)) {
            Model::validateArray($this->prohibitActions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertContent) {
            $res['AlertContent'] = $this->alertContent;
        }

        if (null !== $this->alertContentEn) {
            $res['AlertContentEn'] = $this->alertContentEn;
        }

        if (null !== $this->alertTitle) {
            $res['AlertTitle'] = $this->alertTitle;
        }

        if (null !== $this->alertTitleEn) {
            $res['AlertTitleEn'] = $this->alertTitleEn;
        }

        if (null !== $this->nacDemotionPolicyIds) {
            if (\is_array($this->nacDemotionPolicyIds)) {
                $res['NacDemotionPolicyIds'] = [];
                $n1 = 0;
                foreach ($this->nacDemotionPolicyIds as $item1) {
                    $res['NacDemotionPolicyIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->noticeContent) {
            $res['NoticeContent'] = $this->noticeContent;
        }

        if (null !== $this->noticeContentEn) {
            $res['NoticeContentEn'] = $this->noticeContentEn;
        }

        if (null !== $this->notifyActions) {
            if (\is_array($this->notifyActions)) {
                $res['NotifyActions'] = [];
                $n1 = 0;
                foreach ($this->notifyActions as $item1) {
                    $res['NotifyActions'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->prohibitActions) {
            if (\is_array($this->prohibitActions)) {
                $res['ProhibitActions'] = [];
                $n1 = 0;
                foreach ($this->prohibitActions as $item1) {
                    $res['ProhibitActions'][$n1] = $item1;
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
        if (isset($map['AlertContent'])) {
            $model->alertContent = $map['AlertContent'];
        }

        if (isset($map['AlertContentEn'])) {
            $model->alertContentEn = $map['AlertContentEn'];
        }

        if (isset($map['AlertTitle'])) {
            $model->alertTitle = $map['AlertTitle'];
        }

        if (isset($map['AlertTitleEn'])) {
            $model->alertTitleEn = $map['AlertTitleEn'];
        }

        if (isset($map['NacDemotionPolicyIds'])) {
            if (!empty($map['NacDemotionPolicyIds'])) {
                $model->nacDemotionPolicyIds = [];
                $n1 = 0;
                foreach ($map['NacDemotionPolicyIds'] as $item1) {
                    $model->nacDemotionPolicyIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['NoticeContent'])) {
            $model->noticeContent = $map['NoticeContent'];
        }

        if (isset($map['NoticeContentEn'])) {
            $model->noticeContentEn = $map['NoticeContentEn'];
        }

        if (isset($map['NotifyActions'])) {
            if (!empty($map['NotifyActions'])) {
                $model->notifyActions = [];
                $n1 = 0;
                foreach ($map['NotifyActions'] as $item1) {
                    $model->notifyActions[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ProhibitActions'])) {
            if (!empty($map['ProhibitActions'])) {
                $model->prohibitActions = [];
                $n1 = 0;
                foreach ($map['ProhibitActions'] as $item1) {
                    $model->prohibitActions[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
