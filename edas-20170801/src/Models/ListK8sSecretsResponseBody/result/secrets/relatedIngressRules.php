<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListK8sSecretsResponseBody\result\secrets;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListK8sSecretsResponseBody\result\secrets\relatedIngressRules\relatedApps;

class relatedIngressRules extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var relatedApps[]
     */
    public $relatedApps;
    protected $_name = [
        'name' => 'Name',
        'namespace' => 'Namespace',
        'relatedApps' => 'RelatedApps',
    ];

    public function validate()
    {
        if (\is_array($this->relatedApps)) {
            Model::validateArray($this->relatedApps);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }

        if (null !== $this->relatedApps) {
            if (\is_array($this->relatedApps)) {
                $res['RelatedApps'] = [];
                $n1 = 0;
                foreach ($this->relatedApps as $item1) {
                    $res['RelatedApps'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        if (isset($map['RelatedApps'])) {
            if (!empty($map['RelatedApps'])) {
                $model->relatedApps = [];
                $n1 = 0;
                foreach ($map['RelatedApps'] as $item1) {
                    $model->relatedApps[$n1] = relatedApps::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
