<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class DescribeSuspEventsRequest extends Model
{
    /**
     * @description The ID of the alert event to which the exception belongs.
     *
     * @example 8ff29a086e0ccf4507c55e4ec3af****
     *
     * @var string
     */
    public $alarmUniqueInfo;

    /**
     * @description The number of the page to return. Pages start from page 1. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The processing status of the exception. Valid values:
     *
     *   N: not processed
     *   Y: processed
     *
     * @example N
     *
     * @var string
     */
    public $dealed;

    /**
     * @description The language of the content within the request and response. Valid values:
     *
     *   zh: Chinese
     *   en: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The severity of the exception. Valid values:
     *
     *   serious: The exception is urgent.
     *   suspicious: The exception is a warning
     *   remind: The exception is a suggestion.
     *
     * @example serious
     *
     * @var string
     */
    public $levels;

    /**
     * @description The ID of the workspace.
     *
     * @example cn-hangzhou+dir-363353****
     *
     * @var string
     */
    public $officeSiteId;

    /**
     * @description The number of entries to return on each page. Default value: 20.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The type of the alert event to which the exception belongs.
     *
     * @example Webshell
     *
     * @var string
     */
    public $parentEventType;

    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'alarmUniqueInfo' => 'AlarmUniqueInfo',
        'currentPage'     => 'CurrentPage',
        'dealed'          => 'Dealed',
        'lang'            => 'Lang',
        'levels'          => 'Levels',
        'officeSiteId'    => 'OfficeSiteId',
        'pageSize'        => 'PageSize',
        'parentEventType' => 'ParentEventType',
        'regionId'        => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alarmUniqueInfo) {
            $res['AlarmUniqueInfo'] = $this->alarmUniqueInfo;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->dealed) {
            $res['Dealed'] = $this->dealed;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->levels) {
            $res['Levels'] = $this->levels;
        }
        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->parentEventType) {
            $res['ParentEventType'] = $this->parentEventType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSuspEventsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlarmUniqueInfo'])) {
            $model->alarmUniqueInfo = $map['AlarmUniqueInfo'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['Dealed'])) {
            $model->dealed = $map['Dealed'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Levels'])) {
            $model->levels = $map['Levels'];
        }
        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ParentEventType'])) {
            $model->parentEventType = $map['ParentEventType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
