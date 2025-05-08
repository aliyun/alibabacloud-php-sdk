<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20241111\Models;

use AlibabaCloud\Dara\Model;

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

    public function validate()
    {
        if (null !== $this->search) {
            $this->search->validate();
        }
        if (null !== $this->valueAdded) {
            $this->valueAdded->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->search) {
            $res['search'] = null !== $this->search ? $this->search->toArray($noStream) : $this->search;
        }

        if (null !== $this->valueAdded) {
            $res['valueAdded'] = null !== $this->valueAdded ? $this->valueAdded->toArray($noStream) : $this->valueAdded;
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
        if (isset($map['search'])) {
            $model->search = SearchCredits::fromMap($map['search']);
        }

        if (isset($map['valueAdded'])) {
            $model->valueAdded = ValueAddedCredits::fromMap($map['valueAdded']);
        }

        return $model;
    }
}
