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

    /**
     * @var int
     */
    public $liteAdvancedTextSearch;
    protected $_name = [
        'genericTextSearch' => 'genericTextSearch',
        'liteAdvancedTextSearch' => 'liteAdvancedTextSearch',
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

        if (null !== $this->liteAdvancedTextSearch) {
            $res['liteAdvancedTextSearch'] = $this->liteAdvancedTextSearch;
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

        if (isset($map['liteAdvancedTextSearch'])) {
            $model->liteAdvancedTextSearch = $map['liteAdvancedTextSearch'];
        }

        return $model;
    }
}
