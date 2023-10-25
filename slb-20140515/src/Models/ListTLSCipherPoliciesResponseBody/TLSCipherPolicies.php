<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models\ListTLSCipherPoliciesResponseBody;

use AlibabaCloud\SDK\Slb\V20140515\Models\ListTLSCipherPoliciesResponseBody\TLSCipherPolicies\relateListeners;
use AlibabaCloud\Tea\Model;

class TLSCipherPolicies extends Model
{
    /**
     * @description The cipher suites supported by the TLS version.
     *
     * TLS 1.0 and TLS 1.1 support the following cipher suites:
     *
     *   ECDHE-ECDSA-AES128-SHA
     *   ECDHE-ECDSA-AES256-SHA
     *   ECDHE-RSA-AES128-SHA
     *   ECDHE-RSA-AES256-SHA
     *   AES128-SHA AES256-SHA
     *   DES-CBC3-SHA
     *
     * TLS 1.2 supports the following cipher suites:
     *
     *   ECDHE-ECDSA-AES128-SHA
     *   ECDHE-ECDSA-AES256-SHA
     *   ECDHE-RSA-AES128-SHA
     *   ECDHE-RSA-AES256-SHA
     *   AES128-SHA AES256-SHA
     *   DES-CBC3-SHA
     *   ECDHE-ECDSA-AES128-GCM-SHA256
     *   ECDHE-ECDSA-AES256-GCM-SHA384
     *   ECDHE-ECDSA-AES128-SHA256
     *   ECDHE-ECDSA-AES256-SHA384
     *   ECDHE-RSA-AES128-GCM-SHA256
     *   ECDHE-RSA-AES256-GCM-SHA384
     *   ECDHE-RSA-AES128-SHA256
     *   ECDHE-RSA-AES256-SHA384
     *   AES128-GCM-SHA256
     *   AES256-GCM-SHA384
     *   AES128-SHA256 AES256-SHA256
     *
     * TLS 1.3 supports the following cipher suites:
     *
     *   TLS_AES\_128\_GCM_SHA256
     *   TLS_AES\_256\_GCM_SHA384
     *   TLS_CHACHA20\_POLY1305\_SHA256
     *   TLS_AES\_128\_CCM_SHA256
     *   TLS_AES\_128\_CCM\_8\_SHA256
     *
     * @var string[]
     */
    public $ciphers;

    /**
     * @description The timestamp generated when the TLS policy is created.
     *
     * @example 1608273800000
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The ID of the TLS policy.
     *
     * @example tls-bp17elso1h323r****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the TLS policy.
     *
     * @example TLSPolicy-test****
     *
     * @var string
     */
    public $name;

    /**
     * @description The list of associated listeners.
     *
     * @var relateListeners[]
     */
    public $relateListeners;

    /**
     * @description The status of the TLS policy. Valid values:
     *
     *   **configuring**: The TLS policy is being configured.
     *   **normal**: The TLS policy works as expected.
     *
     * @example normal
     *
     * @var string
     */
    public $status;

    /**
     * @description The version of the TLS protocol.
     *
     * @var string[]
     */
    public $TLSVersions;
    protected $_name = [
        'ciphers'         => 'Ciphers',
        'createTime'      => 'CreateTime',
        'instanceId'      => 'InstanceId',
        'name'            => 'Name',
        'relateListeners' => 'RelateListeners',
        'status'          => 'Status',
        'TLSVersions'     => 'TLSVersions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ciphers) {
            $res['Ciphers'] = $this->ciphers;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->relateListeners) {
            $res['RelateListeners'] = [];
            if (null !== $this->relateListeners && \is_array($this->relateListeners)) {
                $n = 0;
                foreach ($this->relateListeners as $item) {
                    $res['RelateListeners'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->TLSVersions) {
            $res['TLSVersions'] = $this->TLSVersions;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TLSCipherPolicies
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ciphers'])) {
            if (!empty($map['Ciphers'])) {
                $model->ciphers = $map['Ciphers'];
            }
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RelateListeners'])) {
            if (!empty($map['RelateListeners'])) {
                $model->relateListeners = [];
                $n                      = 0;
                foreach ($map['RelateListeners'] as $item) {
                    $model->relateListeners[$n++] = null !== $item ? relateListeners::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TLSVersions'])) {
            if (!empty($map['TLSVersions'])) {
                $model->TLSVersions = $map['TLSVersions'];
            }
        }

        return $model;
    }
}
