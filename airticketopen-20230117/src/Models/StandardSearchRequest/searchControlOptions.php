<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\StandardSearchRequest;

use AlibabaCloud\Dara\Model;

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

    /**
     * @var string
     */
    public $serviceQuality;
    protected $_name = [
        'airlineExcludedList' => 'airline_excluded_list',
        'airlinePreferList' => 'airline_prefer_list',
        'serviceQuality' => 'service_quality',
    ];

    public function validate()
    {
        if (\is_array($this->airlineExcludedList)) {
            Model::validateArray($this->airlineExcludedList);
        }
        if (\is_array($this->airlinePreferList)) {
            Model::validateArray($this->airlinePreferList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->airlineExcludedList) {
            if (\is_array($this->airlineExcludedList)) {
                $res['airline_excluded_list'] = [];
                $n1 = 0;
                foreach ($this->airlineExcludedList as $item1) {
                    $res['airline_excluded_list'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->airlinePreferList) {
            if (\is_array($this->airlinePreferList)) {
                $res['airline_prefer_list'] = [];
                $n1 = 0;
                foreach ($this->airlinePreferList as $item1) {
                    $res['airline_prefer_list'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->serviceQuality) {
            $res['service_quality'] = $this->serviceQuality;
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
        if (isset($map['airline_excluded_list'])) {
            if (!empty($map['airline_excluded_list'])) {
                $model->airlineExcludedList = [];
                $n1 = 0;
                foreach ($map['airline_excluded_list'] as $item1) {
                    $model->airlineExcludedList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['airline_prefer_list'])) {
            if (!empty($map['airline_prefer_list'])) {
                $model->airlinePreferList = [];
                $n1 = 0;
                foreach ($map['airline_prefer_list'] as $item1) {
                    $model->airlinePreferList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['service_quality'])) {
            $model->serviceQuality = $map['service_quality'];
        }

        return $model;
    }
}
