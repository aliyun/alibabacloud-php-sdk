<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDomainStatusCodeListResponseBody;

use AlibabaCloud\Tea\Model;

class statusCodeList extends Model
{
    /**
     * @description The index number of the returned data.
     *
     * @example 0
     *
     * @var int
     */
    public $index;

    /**
     * @description The number of 200 status codes.
     *
     * @example 15520
     *
     * @var int
     */
    public $status200;

    /**
     * @description The number of 2xx status codes.
     *
     * @example 15520
     *
     * @var int
     */
    public $status2XX;

    /**
     * @description The number of 3xx status codes.
     *
     * @example 0
     *
     * @var int
     */
    public $status3XX;

    /**
     * @description The number of 403 status codes.
     *
     * @example 0
     *
     * @var int
     */
    public $status403;

    /**
     * @description The number of 404 status codes.
     *
     * @example 0
     *
     * @var int
     */
    public $status404;

    /**
     * @description The number of 405 status codes.
     *
     * @example 0
     *
     * @var int
     */
    public $status405;

    /**
     * @description The number of 4xx status codes.
     *
     * @example 4486
     *
     * @var int
     */
    public $status4XX;

    /**
     * @description The number of 501 status codes.
     *
     * @example 0
     *
     * @var int
     */
    public $status501;

    /**
     * @description The number of 502 status codes.
     *
     * @example 0
     *
     * @var int
     */
    public $status502;

    /**
     * @description The number of 503 status codes.
     *
     * @example 0
     *
     * @var int
     */
    public $status503;

    /**
     * @description The number of 504 status codes.
     *
     * @example 0
     *
     * @var int
     */
    public $status504;

    /**
     * @description The number of 5xx status codes.
     *
     * @example 0
     *
     * @var int
     */
    public $status5XX;

    /**
     * @description The time when the data was collected. The value is a UNIX timestamp. Unit: seconds.
     *
     * @example 1582992000
     *
     * @var int
     */
    public $time;
    protected $_name = [
        'index'     => 'Index',
        'status200' => 'Status200',
        'status2XX' => 'Status2XX',
        'status3XX' => 'Status3XX',
        'status403' => 'Status403',
        'status404' => 'Status404',
        'status405' => 'Status405',
        'status4XX' => 'Status4XX',
        'status501' => 'Status501',
        'status502' => 'Status502',
        'status503' => 'Status503',
        'status504' => 'Status504',
        'status5XX' => 'Status5XX',
        'time'      => 'Time',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }
        if (null !== $this->status200) {
            $res['Status200'] = $this->status200;
        }
        if (null !== $this->status2XX) {
            $res['Status2XX'] = $this->status2XX;
        }
        if (null !== $this->status3XX) {
            $res['Status3XX'] = $this->status3XX;
        }
        if (null !== $this->status403) {
            $res['Status403'] = $this->status403;
        }
        if (null !== $this->status404) {
            $res['Status404'] = $this->status404;
        }
        if (null !== $this->status405) {
            $res['Status405'] = $this->status405;
        }
        if (null !== $this->status4XX) {
            $res['Status4XX'] = $this->status4XX;
        }
        if (null !== $this->status501) {
            $res['Status501'] = $this->status501;
        }
        if (null !== $this->status502) {
            $res['Status502'] = $this->status502;
        }
        if (null !== $this->status503) {
            $res['Status503'] = $this->status503;
        }
        if (null !== $this->status504) {
            $res['Status504'] = $this->status504;
        }
        if (null !== $this->status5XX) {
            $res['Status5XX'] = $this->status5XX;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return statusCodeList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }
        if (isset($map['Status200'])) {
            $model->status200 = $map['Status200'];
        }
        if (isset($map['Status2XX'])) {
            $model->status2XX = $map['Status2XX'];
        }
        if (isset($map['Status3XX'])) {
            $model->status3XX = $map['Status3XX'];
        }
        if (isset($map['Status403'])) {
            $model->status403 = $map['Status403'];
        }
        if (isset($map['Status404'])) {
            $model->status404 = $map['Status404'];
        }
        if (isset($map['Status405'])) {
            $model->status405 = $map['Status405'];
        }
        if (isset($map['Status4XX'])) {
            $model->status4XX = $map['Status4XX'];
        }
        if (isset($map['Status501'])) {
            $model->status501 = $map['Status501'];
        }
        if (isset($map['Status502'])) {
            $model->status502 = $map['Status502'];
        }
        if (isset($map['Status503'])) {
            $model->status503 = $map['Status503'];
        }
        if (isset($map['Status504'])) {
            $model->status504 = $map['Status504'];
        }
        if (isset($map['Status5XX'])) {
            $model->status5XX = $map['Status5XX'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        return $model;
    }
}
