<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models;

use AlibabaCloud\SDK\Alb\V20200616\Models\AssociateAdditionalCertificatesWithListenerRequest\certificates;
use AlibabaCloud\Tea\Model;

class AssociateAdditionalCertificatesWithListenerRequest extends Model
{
    /**
     * @description 证书列表
     *
     * @var certificates[]
     */
    public $certificates;

    /**
     * @description 幂等Token
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description dryRun
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description 监听Id
     *
     * @var string
     */
    public $listenerId;
    protected $_name = [
        'certificates' => 'Certificates',
        'clientToken'  => 'ClientToken',
        'dryRun'       => 'DryRun',
        'listenerId'   => 'ListenerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certificates) {
            $res['Certificates'] = [];
            if (null !== $this->certificates && \is_array($this->certificates)) {
                $n = 0;
                foreach ($this->certificates as $item) {
                    $res['Certificates'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->listenerId) {
            $res['ListenerId'] = $this->listenerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AssociateAdditionalCertificatesWithListenerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Certificates'])) {
            if (!empty($map['Certificates'])) {
                $model->certificates = [];
                $n                   = 0;
                foreach ($map['Certificates'] as $item) {
                    $model->certificates[$n++] = null !== $item ? certificates::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['ListenerId'])) {
            $model->listenerId = $map['ListenerId'];
        }

        return $model;
    }
}
