<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20241111\Models;

use AlibabaCloud\Dara\Model;

class SearchCredits extends Model
{
    /**
     * @var int
     */
    public $genericTextSearch;
    protected $_name = [
        'genericTextSearch' => 'genericTextSearch',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->genericTextSearch) {
            $res['genericTextSearch'] = $this->genericTextSearch;
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
        if (isset($map['genericTextSearch'])) {
            $model->genericTextSearch = $map['genericTextSearch'];
        }

        return $model;
    }
}
