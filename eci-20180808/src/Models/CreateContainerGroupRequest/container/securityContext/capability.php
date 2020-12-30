<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest\container\securityContext;

use AlibabaCloud\Tea\Model;

class capability extends Model
{
    /**
     * @var string[]
     */
    public $add;
    protected $_name = [
        'add' => 'Add',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->add) {
            $res['Add'] = $this->add;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return capability
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Add'])) {
            if (!empty($map['Add'])) {
                $model->add = $map['Add'];
            }
        }

        return $model;
    }
}
