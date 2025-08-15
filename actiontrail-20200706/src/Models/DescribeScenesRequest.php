<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Actiontrail\V20200706\Models;

use AlibabaCloud\Dara\Model;

class DescribeScenesRequest extends Model
{
    /**
     * @var string
     */
    public $searchCode;
    protected $_name = [
        'searchCode' => 'SearchCode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->searchCode) {
            $res['SearchCode'] = $this->searchCode;
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
        if (isset($map['SearchCode'])) {
            $model->searchCode = $map['SearchCode'];
        }

        return $model;
    }
}
