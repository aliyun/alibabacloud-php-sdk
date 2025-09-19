<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class ModifyConcernNecessityRequest extends Model
{
    /**
     * @var string
     */
    public $concernNecessity;
    protected $_name = [
        'concernNecessity' => 'ConcernNecessity',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->concernNecessity) {
            $res['ConcernNecessity'] = $this->concernNecessity;
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
        if (isset($map['ConcernNecessity'])) {
            $model->concernNecessity = $map['ConcernNecessity'];
        }

        return $model;
    }
}
