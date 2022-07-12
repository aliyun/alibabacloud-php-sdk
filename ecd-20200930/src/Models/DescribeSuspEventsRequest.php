<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class DescribeSuspEventsRequest extends Model
{
    /**
     * @var string
     */
    public $alarmUniqueInfo;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var string
     */
    public $dealed;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $levels;

    /**
     * @var string
     */
    public $officeSiteId;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $parentEventType;

    /**
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
