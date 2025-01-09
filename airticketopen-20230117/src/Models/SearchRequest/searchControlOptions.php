<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\SearchRequest;

use AlibabaCloud\Tea\Model;

class searchControlOptions extends Model
{
    /**
     * @description excluded airlines list
     *
     * @var string[]
     */
    public $airlineExcludedList;

    /**
     * @description preferred airlines list
     *
     * @var string[]
     */
    public $airlinePreferList;

    /**
     * @example A1
     *
     * @var string
     */
    public $serviceQuality;
    protected $_name = [
        'airlineExcludedList' => 'airline_excluded_list',
        'airlinePreferList'   => 'airline_prefer_list',
        'serviceQuality'      => 'service_quality',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->airlineExcludedList) {
            $res['airline_excluded_list'] = $this->airlineExcludedList;
        }
        if (null !== $this->airlinePreferList) {
            $res['airline_prefer_list'] = $this->airlinePreferList;
        }
        if (null !== $this->serviceQuality) {
            $res['service_quality'] = $this->serviceQuality;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return searchControlOptions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['airline_excluded_list'])) {
            if (!empty($map['airline_excluded_list'])) {
                $model->airlineExcludedList = $map['airline_excluded_list'];
            }
        }
        if (isset($map['airline_prefer_list'])) {
            if (!empty($map['airline_prefer_list'])) {
                $model->airlinePreferList = $map['airline_prefer_list'];
            }
        }
        if (isset($map['service_quality'])) {
            $model->serviceQuality = $map['service_quality'];
        }

        return $model;
    }
}
