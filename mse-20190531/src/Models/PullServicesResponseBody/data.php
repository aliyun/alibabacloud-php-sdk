<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\PullServicesResponseBody;

use AlibabaCloud\SDK\Mse\V20190531\Models\PullServicesResponseBody\data\services;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
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
            $res['Services'] = [];
            if (null !== $this->services && \is_array($this->services)) {
                $n = 0;
                foreach ($this->services as $item) {
                    $res['Services'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
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
                $n               = 0;
                foreach ($map['Services'] as $item) {
                    $model->services[$n++] = null !== $item ? services::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
