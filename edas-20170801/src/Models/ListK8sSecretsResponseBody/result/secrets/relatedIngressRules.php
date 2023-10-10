<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListK8sSecretsResponseBody\result\secrets;

use AlibabaCloud\SDK\Edas\V20170801\Models\ListK8sSecretsResponseBody\result\secrets\relatedIngressRules\relatedApps;
use AlibabaCloud\Tea\Model;

class relatedIngressRules extends Model
{
    /**
     * @description The name of the rule in the Ingress.
     *
     * @example testrulename
     *
     * @var string
     */
    public $name;

    /**
     * @description The namespaces of the Kubernetes cluster.
     *
     * @example default
     *
     * @var string
     */
    public $namespace;

    /**
     * @description Aplications that are associated with the Ingress.
     *
     * @var relatedApps[]
     */
    public $relatedApps;
    protected $_name = [
        'name'        => 'Name',
        'namespace'   => 'Namespace',
        'relatedApps' => 'RelatedApps',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->relatedApps) {
            $res['RelatedApps'] = [];
            if (null !== $this->relatedApps && \is_array($this->relatedApps)) {
                $n = 0;
                foreach ($this->relatedApps as $item) {
                    $res['RelatedApps'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return relatedIngressRules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['RelatedApps'])) {
            if (!empty($map['RelatedApps'])) {
                $model->relatedApps = [];
                $n                  = 0;
                foreach ($map['RelatedApps'] as $item) {
                    $model->relatedApps[$n++] = null !== $item ? relatedApps::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
