<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Marketing_event\V20210101\Models\QuerySessionListPopResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description code
     *
     * @example code
     *
     * @var string
     */
    public $code;

    /**
     * @example 2024-09-25 14:11
     *
     * @var string
     */
    public $endTime;

    /**
     * @description id
     *
     * @example 1
     *
     * @var int
     */
    public $id;

    /**
     * @description location
     *
     * @example location
     *
     * @var string
     */
    public $location;

    /**
     * @description name
     *
     * @example name
     *
     * @var string
     */
    public $name;

    /**
     * @example 2024-09-25 14:11
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'code'      => 'Code',
        'endTime'   => 'EndTime',
        'id'        => 'Id',
        'location'  => 'Location',
        'name'      => 'Name',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
