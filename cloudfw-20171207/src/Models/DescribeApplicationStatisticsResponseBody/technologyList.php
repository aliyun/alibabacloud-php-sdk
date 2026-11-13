<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeApplicationStatisticsResponseBody;

use AlibabaCloud\Dara\Model;

class technologyList extends Model
{
    /**
     * @var int
     */
    public $applicationCount;

    /**
     * @var string
     */
    public $technology;
    protected $_name = [
        'applicationCount' => 'ApplicationCount',
        'technology' => 'Technology',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationCount) {
            $res['ApplicationCount'] = $this->applicationCount;
        }

        if (null !== $this->technology) {
            $res['Technology'] = $this->technology;
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
        if (isset($map['ApplicationCount'])) {
            $model->applicationCount = $map['ApplicationCount'];
        }

        if (isset($map['Technology'])) {
            $model->technology = $map['Technology'];
        }

        return $model;
    }
}
