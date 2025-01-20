<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\PullServicesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mse\V20190531\Models\PullServicesResponseBody\data\services;

class data extends Model
{
    /**
     * @var string
     */
    public $groupName;
    /**
     * @var string
     */
    public $namespace;
    /**
     * @var string
     */
    public $namespaceShowName;
    /**
     * @var services[]
     */
    public $services;
    protected $_name = [
        'groupName'         => 'GroupName',
        'namespace'         => 'Namespace',
        'namespaceShowName' => 'NamespaceShowName',
        'services'          => 'Services',
    ];

    public function validate()
    {
        if (\is_array($this->services)) {
            Model::validateArray($this->services);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }

        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }

        if (null !== $this->namespaceShowName) {
            $res['NamespaceShowName'] = $this->namespaceShowName;
        }

        if (null !== $this->services) {
            if (\is_array($this->services)) {
                $res['Services'] = [];
                $n1              = 0;
                foreach ($this->services as $item1) {
                    $res['Services'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        if (isset($map['NamespaceShowName'])) {
            $model->namespaceShowName = $map['NamespaceShowName'];
        }

        if (isset($map['Services'])) {
            if (!empty($map['Services'])) {
                $model->services = [];
                $n1              = 0;
                foreach ($map['Services'] as $item1) {
                    $model->services[$n1++] = services::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
