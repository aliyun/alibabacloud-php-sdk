<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\GetResourceOverviewResponseBody\data;

use AlibabaCloud\Dara\Model;

class api extends Model
{
    /**
     * @var int
     */
    public $publishedCount;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'publishedCount' => 'publishedCount',
        'totalCount' => 'totalCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->publishedCount) {
            $res['publishedCount'] = $this->publishedCount;
        }

        if (null !== $this->totalCount) {
            $res['totalCount'] = $this->totalCount;
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
        if (isset($map['publishedCount'])) {
            $model->publishedCount = $map['publishedCount'];
        }

        if (isset($map['totalCount'])) {
            $model->totalCount = $map['totalCount'];
        }

        return $model;
    }
}
