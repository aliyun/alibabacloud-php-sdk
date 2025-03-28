<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Dara\Model;

class EventFilterConfig extends Model
{
    /**
     * @var BranchFilter
     */
    public $branch;
    protected $_name = [
        'branch' => 'branch',
    ];

    public function validate()
    {
        if (null !== $this->branch) {
            $this->branch->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->branch) {
            $res['branch'] = null !== $this->branch ? $this->branch->toArray($noStream) : $this->branch;
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
        if (isset($map['branch'])) {
            $model->branch = BranchFilter::fromMap($map['branch']);
        }

        return $model;
    }
}
