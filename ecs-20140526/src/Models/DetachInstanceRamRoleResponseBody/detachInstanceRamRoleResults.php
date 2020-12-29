<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DetachInstanceRamRoleResponseBody;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DetachInstanceRamRoleResponseBody\detachInstanceRamRoleResults\detachInstanceRamRoleResult;
use AlibabaCloud\Tea\Model;

class detachInstanceRamRoleResults extends Model
{
    /**
     * @var detachInstanceRamRoleResult[]
     */
    public $detachInstanceRamRoleResult;
    protected $_name = [
        'detachInstanceRamRoleResult' => 'DetachInstanceRamRoleResult',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->detachInstanceRamRoleResult) {
            $res['DetachInstanceRamRoleResult'] = [];
            if (null !== $this->detachInstanceRamRoleResult && \is_array($this->detachInstanceRamRoleResult)) {
                $n = 0;
                foreach ($this->detachInstanceRamRoleResult as $item) {
                    $res['DetachInstanceRamRoleResult'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return detachInstanceRamRoleResults
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DetachInstanceRamRoleResult'])) {
            if (!empty($map['DetachInstanceRamRoleResult'])) {
                $model->detachInstanceRamRoleResult = [];
                $n                                  = 0;
                foreach ($map['DetachInstanceRamRoleResult'] as $item) {
                    $model->detachInstanceRamRoleResult[$n++] = null !== $item ? detachInstanceRamRoleResult::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
