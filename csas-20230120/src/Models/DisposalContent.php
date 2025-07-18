<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Tea\Model;

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
     * @description This parameter is required.
     *
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

    public function validate() {}

    public function toMap()
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
            $res['NacDemotionPolicyIds'] = $this->nacDemotionPolicyIds;
        }
        if (null !== $this->noticeContent) {
            $res['NoticeContent'] = $this->noticeContent;
        }
        if (null !== $this->noticeContentEn) {
            $res['NoticeContentEn'] = $this->noticeContentEn;
        }
        if (null !== $this->notifyActions) {
            $res['NotifyActions'] = $this->notifyActions;
        }
        if (null !== $this->prohibitActions) {
            $res['ProhibitActions'] = $this->prohibitActions;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DisposalContent
     */
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
                $model->nacDemotionPolicyIds = $map['NacDemotionPolicyIds'];
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
                $model->notifyActions = $map['NotifyActions'];
            }
        }
        if (isset($map['ProhibitActions'])) {
            if (!empty($map['ProhibitActions'])) {
                $model->prohibitActions = $map['ProhibitActions'];
            }
        }

        return $model;
    }
}
