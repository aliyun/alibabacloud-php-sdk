<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alimt\V20181012\Models;

use AlibabaCloud\Tea\Model;

class GetTranslateReportRequest extends Model
{
    /**
     * @var string
     */
    public $apiName;

    /**
     * @example 2021-03-01 00:00:00
     *
     * @var string
     */
    public $beginTime;

    /**
     * @example 2021-03-01 23:59:59
     *
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $group;
    protected $_name = [
        'apiName'   => 'ApiName',
        'beginTime' => 'BeginTime',
        'endTime'   => 'EndTime',
        'group'     => 'Group',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiName) {
            $res['ApiName'] = $this->apiName;
        }
        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->group) {
            $res['Group'] = $this->group;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTranslateReportRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiName'])) {
            $model->apiName = $map['ApiName'];
        }
        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Group'])) {
            $model->group = $map['Group'];
        }

        return $model;
    }
}
