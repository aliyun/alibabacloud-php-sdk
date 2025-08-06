<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\AttachInstanceRamRoleResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\AttachInstanceRamRoleResponseBody\attachInstanceRamRoleResults\attachInstanceRamRoleResult;

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
        if (\is_array($this->attachInstanceRamRoleResult)) {
            Model::validateArray($this->attachInstanceRamRoleResult);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attachInstanceRamRoleResult) {
            if (\is_array($this->attachInstanceRamRoleResult)) {
                $res['AttachInstanceRamRoleResult'] = [];
                $n1 = 0;
                foreach ($this->attachInstanceRamRoleResult as $item1) {
                    $res['AttachInstanceRamRoleResult'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['AttachInstanceRamRoleResult'])) {
            if (!empty($map['AttachInstanceRamRoleResult'])) {
                $model->attachInstanceRamRoleResult = [];
                $n1 = 0;
                foreach ($map['AttachInstanceRamRoleResult'] as $item1) {
                    $model->attachInstanceRamRoleResult[$n1] = attachInstanceRamRoleResult::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
