<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeSQLLogCountResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeSQLLogCountResponseBody\items\series;

class items extends Model
{
    /**
     * @var string
     */
    public $name;
    /**
     * @var series[]
     */
    public $series;
    protected $_name = [
        'name'   => 'Name',
        'series' => 'Series',
    ];

    public function validate()
    {
        if (\is_array($this->series)) {
            Model::validateArray($this->series);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->series) {
            if (\is_array($this->series)) {
                $res['Series'] = [];
                $n1            = 0;
                foreach ($this->series as $item1) {
                    $res['Series'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['Series'])) {
            if (!empty($map['Series'])) {
                $model->series = [];
                $n1            = 0;
                foreach ($map['Series'] as $item1) {
                    $model->series[$n1++] = series::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
