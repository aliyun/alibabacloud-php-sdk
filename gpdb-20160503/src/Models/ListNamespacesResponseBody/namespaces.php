<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\ListNamespacesResponseBody;

use AlibabaCloud\Dara\Model;

class namespaces extends Model
{
    /**
     * @var string[]
     */
    public $namespace;
    protected $_name = [
        'namespace' => 'Namespace',
    ];

    public function validate()
    {
        if (\is_array($this->namespace)) {
            Model::validateArray($this->namespace);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->namespace) {
            if (\is_array($this->namespace)) {
                $res['Namespace'] = [];
                $n1 = 0;
                foreach ($this->namespace as $item1) {
                    $res['Namespace'][$n1++] = $item1;
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
        if (isset($map['Namespace'])) {
            if (!empty($map['Namespace'])) {
                $model->namespace = [];
                $n1 = 0;
                foreach ($map['Namespace'] as $item1) {
                    $model->namespace[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
