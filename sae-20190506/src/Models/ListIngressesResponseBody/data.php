<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\ListIngressesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sae\V20190506\Models\ListIngressesResponseBody\data\ingressList;

class data extends Model
{
    /**
     * @var ingressList[]
     */
    public $ingressList;
    protected $_name = [
        'ingressList' => 'IngressList',
    ];

    public function validate()
    {
        if (\is_array($this->ingressList)) {
            Model::validateArray($this->ingressList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ingressList) {
            if (\is_array($this->ingressList)) {
                $res['IngressList'] = [];
                $n1 = 0;
                foreach ($this->ingressList as $item1) {
                    $res['IngressList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['IngressList'])) {
            if (!empty($map['IngressList'])) {
                $model->ingressList = [];
                $n1 = 0;
                foreach ($map['IngressList'] as $item1) {
                    $model->ingressList[$n1] = ingressList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
