<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class DescribeDcdnUserSecDropByMinuteRequest extends Model
{
    /**
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @example 2006-01-02T15:05:04Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @example robot_fingerprint_ai
     *
     * @var string
     */
    public $object;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 2
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example robot_ai
     *
     * @var string
     */
    public $ruleName;

    /**
     * @example robot
     *
     * @var string
     */
    public $secFunc;

    /**
     * @example 2006-01-02T15:04:04Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'domainName' => 'DomainName',
        'endTime'    => 'EndTime',
        'lang'       => 'Lang',
        'object'     => 'Object',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'ruleName'   => 'RuleName',
        'secFunc'    => 'SecFunc',
        'startTime'  => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->object) {
            $res['Object'] = $this->object;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->secFunc) {
            $res['SecFunc'] = $this->secFunc;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDcdnUserSecDropByMinuteRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Object'])) {
            $model->object = $map['Object'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['SecFunc'])) {
            $model->secFunc = $map['SecFunc'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
