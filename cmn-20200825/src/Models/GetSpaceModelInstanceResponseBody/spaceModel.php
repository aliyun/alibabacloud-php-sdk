<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models\GetSpaceModelInstanceResponseBody;

use AlibabaCloud\Tea\Model;

class spaceModel extends Model
{
    /**
     * @example {}
     *
     * @var string
     */
    public $instance;
    protected $_name = [
        'instance' => 'Instance',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instance) {
            $res['Instance'] = $this->instance;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return spaceModel
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Instance'])) {
            $model->instance = $map['Instance'];
        }

        return $model;
    }
}
