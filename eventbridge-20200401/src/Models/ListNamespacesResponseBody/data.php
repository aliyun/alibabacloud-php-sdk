<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListNamespacesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\Namespace_;

class data extends Model
{
    /**
     * @var Namespace_[]
     */
    public $namespaces;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'namespaces' => 'Namespaces',
        'nextToken' => 'NextToken',
        'total' => 'Total',
    ];

    public function validate()
    {
        if (\is_array($this->namespaces)) {
            Model::validateArray($this->namespaces);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->namespaces) {
            if (\is_array($this->namespaces)) {
                $res['Namespaces'] = [];
                $n1 = 0;
                foreach ($this->namespaces as $item1) {
                    $res['Namespaces'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->total) {
            $res['Total'] = $this->total;
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
        if (isset($map['Namespaces'])) {
            if (!empty($map['Namespaces'])) {
                $model->namespaces = [];
                $n1 = 0;
                foreach ($map['Namespaces'] as $item1) {
                    $model->namespaces[$n1] = Namespace_::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
