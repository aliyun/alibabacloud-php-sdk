<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\GetVmMetaResponseBody;

use AlibabaCloud\Tea\Model;

class vmMetaInfo extends Model
{
    /**
     * @description The content of the EnvoyEnv file.
     *
     * @example ....
     *
     * @var string
     */
    public $envoyEnvContent;

    /**
     * @description The content of the hosts file.
     *
     * @example ....
     *
     * @var string
     */
    public $hostsContent;

    /**
     * @description The content of the Token file.
     *
     * @example ....
     *
     * @var string
     */
    public $tokenContent;
    protected $_name = [
        'envoyEnvContent' => 'EnvoyEnvContent',
        'hostsContent'    => 'HostsContent',
        'tokenContent'    => 'TokenContent',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->envoyEnvContent) {
            $res['EnvoyEnvContent'] = $this->envoyEnvContent;
        }
        if (null !== $this->hostsContent) {
            $res['HostsContent'] = $this->hostsContent;
        }
        if (null !== $this->tokenContent) {
            $res['TokenContent'] = $this->tokenContent;
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
        if (isset($map['EnvoyEnvContent'])) {
            $model->envoyEnvContent = $map['EnvoyEnvContent'];
        }
        if (isset($map['HostsContent'])) {
            $model->hostsContent = $map['HostsContent'];
        }
        if (isset($map['TokenContent'])) {
            $model->tokenContent = $map['TokenContent'];
        }

        return $model;
    }
}
