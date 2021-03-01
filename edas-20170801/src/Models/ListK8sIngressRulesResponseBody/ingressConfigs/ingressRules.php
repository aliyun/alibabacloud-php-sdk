<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListK8sIngressRulesResponseBody\ingressConfigs;

use AlibabaCloud\SDK\Edas\V20170801\Models\ListK8sIngressRulesResponseBody\ingressConfigs\ingressRules\ingressPaths;
use AlibabaCloud\Tea\Model;

class ingressRules extends Model
{
    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var ingressPaths[]
     */
    public $ingressPaths;

    /**
     * @var string
     */
    public $endpoint;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'creationTime' => 'CreationTime',
        'ingressPaths' => 'IngressPaths',
        'endpoint'     => 'Endpoint',
        'namespace'    => 'Namespace',
        'name'         => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->ingressPaths) {
            $res['IngressPaths'] = [];
            if (null !== $this->ingressPaths && \is_array($this->ingressPaths)) {
                $n = 0;
                foreach ($this->ingressPaths as $item) {
                    $res['IngressPaths'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ingressRules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['IngressPaths'])) {
            if (!empty($map['IngressPaths'])) {
                $model->ingressPaths = [];
                $n                   = 0;
                foreach ($map['IngressPaths'] as $item) {
                    $model->ingressPaths[$n++] = null !== $item ? ingressPaths::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
