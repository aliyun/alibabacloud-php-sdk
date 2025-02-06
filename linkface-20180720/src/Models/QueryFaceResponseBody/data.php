<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LinkFace\V20180720\Models\QueryFaceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\LinkFace\V20180720\Models\QueryFaceResponseBody\data\userFaceMetas;

class data extends Model
{
    /**
     * @var string[]
     */
    public $groupIds;
    /**
     * @var userFaceMetas[]
     */
    public $userFaceMetas;
    protected $_name = [
        'groupIds'      => 'GroupIds',
        'userFaceMetas' => 'UserFaceMetas',
    ];

    public function validate()
    {
        if (\is_array($this->groupIds)) {
            Model::validateArray($this->groupIds);
        }
        if (\is_array($this->userFaceMetas)) {
            Model::validateArray($this->userFaceMetas);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->groupIds) {
            if (\is_array($this->groupIds)) {
                $res['GroupIds'] = [];
                $n1              = 0;
                foreach ($this->groupIds as $item1) {
                    $res['GroupIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->userFaceMetas) {
            if (\is_array($this->userFaceMetas)) {
                $res['UserFaceMetas'] = [];
                $n1                   = 0;
                foreach ($this->userFaceMetas as $item1) {
                    $res['UserFaceMetas'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['GroupIds'])) {
            if (!empty($map['GroupIds'])) {
                $model->groupIds = [];
                $n1              = 0;
                foreach ($map['GroupIds'] as $item1) {
                    $model->groupIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['UserFaceMetas'])) {
            if (!empty($map['UserFaceMetas'])) {
                $model->userFaceMetas = [];
                $n1                   = 0;
                foreach ($map['UserFaceMetas'] as $item1) {
                    $model->userFaceMetas[$n1++] = userFaceMetas::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
