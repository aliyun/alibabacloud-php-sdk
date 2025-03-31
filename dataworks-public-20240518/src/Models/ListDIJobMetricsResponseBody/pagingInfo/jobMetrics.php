<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDIJobMetricsResponseBody\pagingInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDIJobMetricsResponseBody\pagingInfo\jobMetrics\seriesList;

class jobMetrics extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var seriesList[]
     */
    public $seriesList;
    protected $_name = [
        'name' => 'Name',
        'seriesList' => 'SeriesList',
    ];

    public function validate()
    {
        if (\is_array($this->seriesList)) {
            Model::validateArray($this->seriesList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->seriesList) {
            if (\is_array($this->seriesList)) {
                $res['SeriesList'] = [];
                $n1 = 0;
                foreach ($this->seriesList as $item1) {
                    $res['SeriesList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['SeriesList'])) {
            if (!empty($map['SeriesList'])) {
                $model->seriesList = [];
                $n1 = 0;
                foreach ($map['SeriesList'] as $item1) {
                    $model->seriesList[$n1++] = seriesList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
