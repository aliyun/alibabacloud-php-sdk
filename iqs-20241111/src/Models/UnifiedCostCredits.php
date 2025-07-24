<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20241111\Models;

use AlibabaCloud\Tea\Model;

class UnifiedCostCredits extends Model
{
    /**
     * @var SearchCredits
     */
    public $search;

    /**
     * @var ValueAddedCredits
     */
    public $valueAdded;
    protected $_name = [
        'search' => 'search',
        'valueAdded' => 'valueAdded',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->search) {
            $res['search'] = null !== $this->search ? $this->search->toMap() : null;
        }
        if (null !== $this->valueAdded) {
            $res['valueAdded'] = null !== $this->valueAdded ? $this->valueAdded->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UnifiedCostCredits
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['search'])) {
            $model->search = SearchCredits::fromMap($map['search']);
        }
        if (isset($map['valueAdded'])) {
            $model->valueAdded = ValueAddedCredits::fromMap($map['valueAdded']);
        }

        return $model;
    }
}
