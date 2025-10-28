<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListK8sIngressRulesResponseBody\data\ingressConfs;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListK8sIngressRulesResponseBody\data\ingressConfs\rules\paths;

class rules extends Model
{
    /**
     * @var bool
     */
    public $enableTls;

    /**
     * @var string
     */
    public $host;

    /**
     * @var paths[]
     */
    public $paths;

    /**
     * @var string
     */
    public $secretName;
    protected $_name = [
        'enableTls' => 'EnableTls',
        'host' => 'Host',
        'paths' => 'Paths',
        'secretName' => 'SecretName',
    ];

    public function validate()
    {
        if (\is_array($this->paths)) {
            Model::validateArray($this->paths);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enableTls) {
            $res['EnableTls'] = $this->enableTls;
        }

        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }

        if (null !== $this->paths) {
            if (\is_array($this->paths)) {
                $res['Paths'] = [];
                $n1 = 0;
                foreach ($this->paths as $item1) {
                    $res['Paths'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->secretName) {
            $res['SecretName'] = $this->secretName;
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
        if (isset($map['EnableTls'])) {
            $model->enableTls = $map['EnableTls'];
        }

        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }

        if (isset($map['Paths'])) {
            if (!empty($map['Paths'])) {
                $model->paths = [];
                $n1 = 0;
                foreach ($map['Paths'] as $item1) {
                    $model->paths[$n1] = paths::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SecretName'])) {
            $model->secretName = $map['SecretName'];
        }

        return $model;
    }
}
