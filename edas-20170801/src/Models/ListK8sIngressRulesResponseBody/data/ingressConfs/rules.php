<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListK8sIngressRulesResponseBody\data\ingressConfs;

use AlibabaCloud\SDK\Edas\V20170801\Models\ListK8sIngressRulesResponseBody\data\ingressConfs\rules\paths;
use AlibabaCloud\Tea\Model;

class rules extends Model
{
    /**
     * @description Indicates whether TLS is enabled. Valid values:
     *
     *   true: TLS is enabled.
     *   false: TLS is disabled.
     *
     * @example false
     *
     * @var bool
     */
    public $enableTls;

    /**
     * @description The domain name to be accessed.
     *
     * @example example.com
     *
     * @var string
     */
    public $host;

    /**
     * @description The list of paths to be accessed.
     *
     * @var paths[]
     */
    public $paths;

    /**
     * @description The name of the Secret that stores the information about the Transport Layer Security (TLS) certificate.
     *
     * @example my-secret
     *
     * @var string
     */
    public $secretName;
    protected $_name = [
        'enableTls'  => 'EnableTls',
        'host'       => 'Host',
        'paths'      => 'Paths',
        'secretName' => 'SecretName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableTls) {
            $res['EnableTls'] = $this->enableTls;
        }
        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }
        if (null !== $this->paths) {
            $res['Paths'] = [];
            if (null !== $this->paths && \is_array($this->paths)) {
                $n = 0;
                foreach ($this->paths as $item) {
                    $res['Paths'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->secretName) {
            $res['SecretName'] = $this->secretName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rules
     */
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
                $n            = 0;
                foreach ($map['Paths'] as $item) {
                    $model->paths[$n++] = null !== $item ? paths::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SecretName'])) {
            $model->secretName = $map['SecretName'];
        }

        return $model;
    }
}
