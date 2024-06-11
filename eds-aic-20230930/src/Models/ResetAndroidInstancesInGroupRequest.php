<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Tea\Model;

class ResetAndroidInstancesInGroupRequest extends Model
{
    /**
     * @var string[]
     */
    public $androidInstanceIds;
    protected $_name = [
        'androidInstanceIds' => 'AndroidInstanceIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->androidInstanceIds) {
            $res['AndroidInstanceIds'] = $this->androidInstanceIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ResetAndroidInstancesInGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AndroidInstanceIds'])) {
            if (!empty($map['AndroidInstanceIds'])) {
                $model->androidInstanceIds = $map['AndroidInstanceIds'];
            }
        }

        return $model;
    }
}
