<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models\ListTLSCipherPoliciesResponseBody;

use AlibabaCloud\SDK\Slb\V20140515\Models\ListTLSCipherPoliciesResponseBody\TLSCipherPolicies\relateListeners;
use AlibabaCloud\Tea\Model;

class TLSCipherPolicies extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var relateListeners[]
     */
    public $relateListeners;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string[]
     */
    public $ciphers;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string[]
     */
    public $TLSVersions;
    protected $_name = [
        'status'          => 'Status',
        'relateListeners' => 'RelateListeners',
        'createTime'      => 'CreateTime',
        'ciphers'         => 'Ciphers',
        'instanceId'      => 'InstanceId',
        'name'            => 'Name',
        'TLSVersions'     => 'TLSVersions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->ciphers) {
            $res['Ciphers'] = $this->ciphers;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Ciphers'])) {
            if (!empty($map['Ciphers'])) {
                $model->ciphers = $map['Ciphers'];
            }
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['TLSVersions'])) {
            if (!empty($map['TLSVersions'])) {
                $model->TLSVersions = $map['TLSVersions'];
            }
        }

        return $model;
    }
}
