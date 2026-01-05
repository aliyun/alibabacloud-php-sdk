<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\ListPrincipalsResponseBody\principals;

class ListPrincipalsResponseBody extends Model
{
    /**
     * @var principals[]
     */
    public $principals;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'principals' => 'Principals',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->principals)) {
            Model::validateArray($this->principals);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->principals) {
            if (\is_array($this->principals)) {
                $res['Principals'] = [];
                $n1 = 0;
                foreach ($this->principals as $item1) {
                    $res['Principals'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Principals'])) {
            if (!empty($map['Principals'])) {
                $model->principals = [];
                $n1 = 0;
                foreach ($map['Principals'] as $item1) {
                    $model->principals[$n1] = principals::fromMap($item1);
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
