<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\GetVmMetaResponseBody;

use AlibabaCloud\Tea\Model;

class vmMetaInfo extends Model
{
    /**
     * @var string
     */
    public $hostsContent;

    /**
     * @var string
     */
    public $tokenContent;

    /**
     * @var string
     */
    public $envoyEnvContent;
    protected $_name = [
        'hostsContent'    => 'HostsContent',
        'tokenContent'    => 'TokenContent',
        'envoyEnvContent' => 'EnvoyEnvContent',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hostsContent) {
            $res['HostsContent'] = $this->hostsContent;
        }
        if (null !== $this->tokenContent) {
            $res['TokenContent'] = $this->tokenContent;
        }
        if (null !== $this->envoyEnvContent) {
            $res['EnvoyEnvContent'] = $this->envoyEnvContent;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vmMetaInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HostsContent'])) {
            $model->hostsContent = $map['HostsContent'];
        }
        if (isset($map['TokenContent'])) {
            $model->tokenContent = $map['TokenContent'];
        }
        if (isset($map['EnvoyEnvContent'])) {
            $model->envoyEnvContent = $map['EnvoyEnvContent'];
        }

        return $model;
    }
}
