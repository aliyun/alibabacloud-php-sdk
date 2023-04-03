<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class DescribeDohUserInfoRequest extends Model
{
    /**
     * @description The end time for the query. Format: YYYY-MM-DD
     *
     * If you do not specify this parameter, the default value is the time when you perform the query.
     * @example 2019-07-04
     *
     * @var string
     */
    public $endDate;

    /**
     * @description The language in which you want the values of some response parameters to be returned. These response parameters support multiple languages.
     *
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @description The start time for the query. Format: YYYY-MM-DD
     *
     * You can query the user information of the last 90 days only. `Set the parameter to a value no earlier than 90 days from the current time`.
     * @example 2019-07-04
     *
     * @var string
     */
    public $startDate;
    protected $_name = [
        'endDate'   => 'EndDate',
        'lang'      => 'Lang',
        'startDate' => 'StartDate',
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
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDohUserInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }

        return $model;
    }
}
