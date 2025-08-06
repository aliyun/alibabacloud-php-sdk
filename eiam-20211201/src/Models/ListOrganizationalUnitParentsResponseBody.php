<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListOrganizationalUnitParentsResponseBody\parents;

class ListOrganizationalUnitParentsResponseBody extends Model
{
    /**
     * @var parents[]
     */
    public $parents;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'parents' => 'Parents',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->parents)) {
            Model::validateArray($this->parents);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->parents) {
            if (\is_array($this->parents)) {
                $res['Parents'] = [];
                $n1 = 0;
                foreach ($this->parents as $item1) {
                    $res['Parents'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Parents'])) {
            if (!empty($map['Parents'])) {
                $model->parents = [];
                $n1 = 0;
                foreach ($map['Parents'] as $item1) {
                    $model->parents[$n1] = parents::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
