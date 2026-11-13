<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeApplicationStatisticsResponseBody;

use AlibabaCloud\Dara\Model;

class categoryList extends Model
{
    /**
     * @var int
     */
    public $applicationCount;

    /**
     * @var string
     */
    public $categoryName;
    protected $_name = [
        'applicationCount' => 'ApplicationCount',
        'categoryName' => 'CategoryName',
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

        if (null !== $this->categoryName) {
            $res['CategoryName'] = $this->categoryName;
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

        if (isset($map['CategoryName'])) {
            $model->categoryName = $map['CategoryName'];
        }

        return $model;
    }
}
