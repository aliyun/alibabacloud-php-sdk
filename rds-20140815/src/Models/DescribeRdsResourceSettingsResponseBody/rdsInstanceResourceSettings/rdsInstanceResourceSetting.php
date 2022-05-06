<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRdsResourceSettingsResponseBody\rdsInstanceResourceSettings;

use AlibabaCloud\Tea\Model;

class rdsInstanceResourceSetting extends Model
{
    /**
     * @var string
     */
    public $endDate;

    /**
     * @var string
     */
    public $isTop;

    /**
     * @var string
     */
    public $noticeBarContent;

    /**
     * @var string
     */
    public $poppedUpButtonText;

    /**
     * @var string
     */
    public $poppedUpButtonType;

    /**
     * @var string
     */
    public $poppedUpButtonUrl;

    /**
     * @var string
     */
    public $poppedUpContent;

    /**
     * @var string
     */
    public $resourceNiche;

    /**
     * @var string
     */
    public $startDate;
    protected $_name = [
        'endDate'            => 'EndDate',
        'isTop'              => 'IsTop',
        'noticeBarContent'   => 'NoticeBarContent',
        'poppedUpButtonText' => 'PoppedUpButtonText',
        'poppedUpButtonType' => 'PoppedUpButtonType',
        'poppedUpButtonUrl'  => 'PoppedUpButtonUrl',
        'poppedUpContent'    => 'PoppedUpContent',
        'resourceNiche'      => 'ResourceNiche',
        'startDate'          => 'StartDate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->isTop) {
            $res['IsTop'] = $this->isTop;
        }
        if (null !== $this->noticeBarContent) {
            $res['NoticeBarContent'] = $this->noticeBarContent;
        }
        if (null !== $this->poppedUpButtonText) {
            $res['PoppedUpButtonText'] = $this->poppedUpButtonText;
        }
        if (null !== $this->poppedUpButtonType) {
            $res['PoppedUpButtonType'] = $this->poppedUpButtonType;
        }
        if (null !== $this->poppedUpButtonUrl) {
            $res['PoppedUpButtonUrl'] = $this->poppedUpButtonUrl;
        }
        if (null !== $this->poppedUpContent) {
            $res['PoppedUpContent'] = $this->poppedUpContent;
        }
        if (null !== $this->resourceNiche) {
            $res['ResourceNiche'] = $this->resourceNiche;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rdsInstanceResourceSetting
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['IsTop'])) {
            $model->isTop = $map['IsTop'];
        }
        if (isset($map['NoticeBarContent'])) {
            $model->noticeBarContent = $map['NoticeBarContent'];
        }
        if (isset($map['PoppedUpButtonText'])) {
            $model->poppedUpButtonText = $map['PoppedUpButtonText'];
        }
        if (isset($map['PoppedUpButtonType'])) {
            $model->poppedUpButtonType = $map['PoppedUpButtonType'];
        }
        if (isset($map['PoppedUpButtonUrl'])) {
            $model->poppedUpButtonUrl = $map['PoppedUpButtonUrl'];
        }
        if (isset($map['PoppedUpContent'])) {
            $model->poppedUpContent = $map['PoppedUpContent'];
        }
        if (isset($map['ResourceNiche'])) {
            $model->resourceNiche = $map['ResourceNiche'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }

        return $model;
    }
}
