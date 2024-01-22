<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeHistoryEventsResponseBody;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeHistoryEventsResponseBody\items\data;
use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @description The details of the data.
     *
     * @var data
     */
    public $data;

    /**
     * @description The task ID
     *
     * @example 4309
     *
     * @var string
     */
    public $id;

    /**
     * @description The region ID.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $region;

    /**
     * @description The event source.
     *
     * @example loanBill
     *
     * @var string
     */
    public $source;

    /**
     * @description The database engine version.
     *
     * @example 8.0
     *
     * @var string
     */
    public $specversion;

    /**
     * @description The name of the pending event.
     *
     * @example QiTian
     *
     * @var string
     */
    public $subject;

    /**
     * @description The amount of time that has elapsed from the start time of the query. Unit: seconds.
     *
     * @example 1675232573125
     *
     * @var string
     */
    public $time;

    /**
     * @description The event type. For more information, see [View the event history of an ApsaraDB RDS instance](~~129759~~).
     *
     * @example host
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'data'        => 'Data',
        'id'          => 'Id',
        'region'      => 'Region',
        'source'      => 'Source',
        'specversion' => 'Specversion',
        'subject'     => 'Subject',
        'time'        => 'Time',
        'type'        => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = null !== $this->data ? $this->data->toMap() : null;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->specversion) {
            $res['Specversion'] = $this->specversion;
        }
        if (null !== $this->subject) {
            $res['Subject'] = $this->subject;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            $model->data = data::fromMap($map['Data']);
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['Specversion'])) {
            $model->specversion = $map['Specversion'];
        }
        if (isset($map['Subject'])) {
            $model->subject = $map['Subject'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
