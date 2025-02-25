<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emasappmonitor\V20190611\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Emasappmonitor\V20190611\Models\GetErrorsRequest\filter;
use AlibabaCloud\SDK\Emasappmonitor\V20190611\Models\GetErrorsRequest\timeRange;

class GetErrorsRequest extends Model
{
    /**
     * @var int
     */
    public $appKey;
    /**
     * @var string
     */
    public $bizModule;
    /**
     * @var string
     */
    public $digestHash;
    /**
     * @var filter
     */
    public $filter;
    /**
     * @var string
     */
    public $os;
    /**
     * @var int
     */
    public $pageIndex;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var timeRange
     */
    public $timeRange;
    /**
     * @var string
     */
    public $utdid;
    protected $_name = [
        'appKey'     => 'AppKey',
        'bizModule'  => 'BizModule',
        'digestHash' => 'DigestHash',
        'filter'     => 'Filter',
        'os'         => 'Os',
        'pageIndex'  => 'PageIndex',
        'pageSize'   => 'PageSize',
        'timeRange'  => 'TimeRange',
        'utdid'      => 'Utdid',
    ];

    public function validate()
    {
        if (null !== $this->filter) {
            $this->filter->validate();
        }
        if (null !== $this->timeRange) {
            $this->timeRange->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
        }

        if (null !== $this->bizModule) {
            $res['BizModule'] = $this->bizModule;
        }

        if (null !== $this->digestHash) {
            $res['DigestHash'] = $this->digestHash;
        }

        if (null !== $this->filter) {
            $res['Filter'] = null !== $this->filter ? $this->filter->toArray($noStream) : $this->filter;
        }

        if (null !== $this->os) {
            $res['Os'] = $this->os;
        }

        if (null !== $this->pageIndex) {
            $res['PageIndex'] = $this->pageIndex;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->timeRange) {
            $res['TimeRange'] = null !== $this->timeRange ? $this->timeRange->toArray($noStream) : $this->timeRange;
        }

        if (null !== $this->utdid) {
            $res['Utdid'] = $this->utdid;
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
        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }

        if (isset($map['BizModule'])) {
            $model->bizModule = $map['BizModule'];
        }

        if (isset($map['DigestHash'])) {
            $model->digestHash = $map['DigestHash'];
        }

        if (isset($map['Filter'])) {
            $model->filter = filter::fromMap($map['Filter']);
        }

        if (isset($map['Os'])) {
            $model->os = $map['Os'];
        }

        if (isset($map['PageIndex'])) {
            $model->pageIndex = $map['PageIndex'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['TimeRange'])) {
            $model->timeRange = timeRange::fromMap($map['TimeRange']);
        }

        if (isset($map['Utdid'])) {
            $model->utdid = $map['Utdid'];
        }

        return $model;
    }
}
