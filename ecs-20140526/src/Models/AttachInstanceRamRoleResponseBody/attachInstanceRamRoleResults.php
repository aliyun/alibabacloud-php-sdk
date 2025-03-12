<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\AttachInstanceRamRoleResponseBody;

use AlibabaCloud\SDK\Ecs\V20140526\Models\AttachInstanceRamRoleResponseBody\attachInstanceRamRoleResults\attachInstanceRamRoleResult;
use AlibabaCloud\Tea\Model;

class attachInstanceRamRoleResults extends Model
{
    /**
     * @var attachInstanceRamRoleResult[]
     */
    public $attachInstanceRamRoleResult;
    protected $_name = [
        'attachInstanceRamRoleResult' => 'AttachInstanceRamRoleResult',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attachInstanceRamRoleResult) {
            $res['AttachInstanceRamRoleResult'] = [];
            if (null !== $this->attachInstanceRamRoleResult && \is_array($this->attachInstanceRamRoleResult)) {
                $n = 0;
                foreach ($this->attachInstanceRamRoleResult as $item) {
                    $res['AttachInstanceRamRoleResult'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return attachInstanceRamRoleResults
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AttachInstanceRamRoleResult'])) {
            if (!empty($map['AttachInstanceRamRoleResult'])) {
                $model->attachInstanceRamRoleResult = [];
                $n                                  = 0;
                foreach ($map['AttachInstanceRamRoleResult'] as $item) {
                    $model->attachInstanceRamRoleResult[$n++] = null !== $item ? attachInstanceRamRoleResult::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
