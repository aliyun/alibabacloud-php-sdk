<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRdsResourceSettingsResponseBody\rdsInstanceResourceSettings;

use AlibabaCloud\Tea\Model;

class rdsInstanceResourceSetting extends Model
{
    /**
     * @var string
     */
    public $poppedUpButtonType;

    /**
     * @var string
     */
    public $noticeBarContent;

    /**
     * @var string
     */
    public $endDate;

    /**
     * @var string
     */
    public $poppedUpContent;

    /**
     * @var string
     */
    public $startDate;

    /**
     * @var string
     */
    public $poppedUpButtonText;

    /**
     * @var string
     */
    public $isTop;

    /**
     * @var string
     */
    public $resourceNiche;

    /**
     * @var string
     */
    public $poppedUpButtonUrl;
    protected $_name = [
        'poppedUpButtonType' => 'PoppedUpButtonType',
        'noticeBarContent'   => 'NoticeBarContent',
        'endDate'            => 'EndDate',
        'poppedUpContent'    => 'PoppedUpContent',
        'startDate'          => 'StartDate',
        'poppedUpButtonText' => 'PoppedUpButtonText',
        'isTop'              => 'IsTop',
        'resourceNiche'      => 'ResourceNiche',
        'poppedUpButtonUrl'  => 'PoppedUpButtonUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->poppedUpButtonType) {
            $res['PoppedUpButtonType'] = $this->poppedUpButtonType;
        }
        if (null !== $this->noticeBarContent) {
            $res['NoticeBarContent'] = $this->noticeBarContent;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->poppedUpContent) {
            $res['PoppedUpContent'] = $this->poppedUpContent;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }
        if (null !== $this->poppedUpButtonText) {
            $res['PoppedUpButtonText'] = $this->poppedUpButtonText;
        }
        if (null !== $this->isTop) {
            $res['IsTop'] = $this->isTop;
        }
        if (null !== $this->resourceNiche) {
            $res['ResourceNiche'] = $this->resourceNiche;
        }
        if (null !== $this->poppedUpButtonUrl) {
            $res['PoppedUpButtonUrl'] = $this->poppedUpButtonUrl;
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
        if (isset($map['PoppedUpButtonType'])) {
            $model->poppedUpButtonType = $map['PoppedUpButtonType'];
        }
        if (isset($map['NoticeBarContent'])) {
            $model->noticeBarContent = $map['NoticeBarContent'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['PoppedUpContent'])) {
            $model->poppedUpContent = $map['PoppedUpContent'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }
        if (isset($map['PoppedUpButtonText'])) {
            $model->poppedUpButtonText = $map['PoppedUpButtonText'];
        }
        if (isset($map['IsTop'])) {
            $model->isTop = $map['IsTop'];
        }
        if (isset($map['ResourceNiche'])) {
            $model->resourceNiche = $map['ResourceNiche'];
        }
        if (isset($map['PoppedUpButtonUrl'])) {
            $model->poppedUpButtonUrl = $map['PoppedUpButtonUrl'];
        }

        return $model;
    }
}
