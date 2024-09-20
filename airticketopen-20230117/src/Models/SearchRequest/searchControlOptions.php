<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\SearchRequest;

use AlibabaCloud\Tea\Model;

class searchControlOptions extends Model
{
    /**
     * @var string[]
     */
    public $airlineExcludedList;

    /**
     * @var string[]
     */
    public $airlinePreferList;
    protected $_name = [
        'airlineExcludedList' => 'airline_excluded_list',
        'airlinePreferList'   => 'airline_prefer_list',
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

        return $model;
    }
}
