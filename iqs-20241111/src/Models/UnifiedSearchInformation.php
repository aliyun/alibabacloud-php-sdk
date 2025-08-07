<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20241111\Models;

use AlibabaCloud\Dara\Model;

class UnifiedSearchInformation extends Model
{
    /**
     * @var int
     */
    public $searchTime;
    protected $_name = [
        'searchTime' => 'searchTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->searchTime) {
            $res['searchTime'] = $this->searchTime;
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
        if (isset($map['searchTime'])) {
            $model->searchTime = $map['searchTime'];
        }

        return $model;
    }
}
