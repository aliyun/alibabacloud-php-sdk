<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterCidrResponseBody\cidrLists;

class ListTransitRouterCidrResponseBody extends Model
{
    /**
     * @var cidrLists[]
     */
    public $cidrLists;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'cidrLists' => 'CidrLists',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->cidrLists)) {
            Model::validateArray($this->cidrLists);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cidrLists) {
            if (\is_array($this->cidrLists)) {
                $res['CidrLists'] = [];
                $n1               = 0;
                foreach ($this->cidrLists as $item1) {
                    $res['CidrLists'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['CidrLists'])) {
            if (!empty($map['CidrLists'])) {
                $model->cidrLists = [];
                $n1               = 0;
                foreach ($map['CidrLists'] as $item1) {
                    $model->cidrLists[$n1++] = cidrLists::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
