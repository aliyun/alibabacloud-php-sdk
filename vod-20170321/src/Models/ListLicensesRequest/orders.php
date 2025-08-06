<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\ListLicensesRequest;

use AlibabaCloud\Dara\Model;

class orders extends Model
{
    /**
     * @var string
     */
    public $orderBy;

    /**
     * @var string
     */
    public $orderDirection;
    protected $_name = [
        'orderBy' => 'OrderBy',
        'orderDirection' => 'OrderDirection',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->orderBy) {
            $res['OrderBy'] = $this->orderBy;
        }

        if (null !== $this->orderDirection) {
            $res['OrderDirection'] = $this->orderDirection;
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
        if (isset($map['OrderBy'])) {
            $model->orderBy = $map['OrderBy'];
        }

        if (isset($map['OrderDirection'])) {
            $model->orderDirection = $map['OrderDirection'];
        }

        return $model;
    }
}
