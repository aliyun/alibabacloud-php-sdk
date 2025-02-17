<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DetachInstanceRamRoleResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DetachInstanceRamRoleResponseBody\detachInstanceRamRoleResults\detachInstanceRamRoleResult;

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
        if (\is_array($this->detachInstanceRamRoleResult)) {
            Model::validateArray($this->detachInstanceRamRoleResult);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->detachInstanceRamRoleResult) {
            if (\is_array($this->detachInstanceRamRoleResult)) {
                $res['DetachInstanceRamRoleResult'] = [];
                $n1                                 = 0;
                foreach ($this->detachInstanceRamRoleResult as $item1) {
                    $res['DetachInstanceRamRoleResult'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['DetachInstanceRamRoleResult'])) {
            if (!empty($map['DetachInstanceRamRoleResult'])) {
                $model->detachInstanceRamRoleResult = [];
                $n1                                 = 0;
                foreach ($map['DetachInstanceRamRoleResult'] as $item1) {
                    $model->detachInstanceRamRoleResult[$n1++] = detachInstanceRamRoleResult::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
