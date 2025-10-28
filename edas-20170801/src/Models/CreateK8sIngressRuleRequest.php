<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Dara\Model;

class CreateK8sIngressRuleRequest extends Model
{
    /**
     * @var string
     */
    public $annotations;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var mixed[]
     */
    public $ingressConf;

    /**
     * @var string
     */
    public $labels;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $namespace;
    protected $_name = [
        'annotations' => 'Annotations',
        'clusterId' => 'ClusterId',
        'ingressConf' => 'IngressConf',
        'labels' => 'Labels',
        'name' => 'Name',
        'namespace' => 'Namespace',
    ];

    public function validate()
    {
        if (\is_array($this->ingressConf)) {
            Model::validateArray($this->ingressConf);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->annotations) {
            $res['Annotations'] = $this->annotations;
        }

        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->ingressConf) {
            if (\is_array($this->ingressConf)) {
                $res['IngressConf'] = [];
                foreach ($this->ingressConf as $key1 => $value1) {
                    $res['IngressConf'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->labels) {
            $res['Labels'] = $this->labels;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
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
        if (isset($map['Annotations'])) {
            $model->annotations = $map['Annotations'];
        }

        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['IngressConf'])) {
            if (!empty($map['IngressConf'])) {
                $model->ingressConf = [];
                foreach ($map['IngressConf'] as $key1 => $value1) {
                    $model->ingressConf[$key1] = $value1;
                }
            }
        }

        if (isset($map['Labels'])) {
            $model->labels = $map['Labels'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        return $model;
    }
}
