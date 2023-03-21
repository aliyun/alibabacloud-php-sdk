<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->concernNecessity) {
            $res['ConcernNecessity'] = $this->concernNecessity;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyConcernNecessityRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConcernNecessity'])) {
            $model->concernNecessity = $map['ConcernNecessity'];
        }

        return $model;
    }
}
