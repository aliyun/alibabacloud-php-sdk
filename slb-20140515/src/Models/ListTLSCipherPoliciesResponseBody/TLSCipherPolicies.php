<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models\ListTLSCipherPoliciesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Slb\V20140515\Models\ListTLSCipherPoliciesResponseBody\TLSCipherPolicies\relateListeners;

class TLSCipherPolicies extends Model
{
    /**
     * @var string[]
     */
    public $ciphers;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var relateListeners[]
     */
    public $relateListeners;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string[]
     */
    public $TLSVersions;
    protected $_name = [
        'ciphers' => 'Ciphers',
        'createTime' => 'CreateTime',
        'instanceId' => 'InstanceId',
        'name' => 'Name',
        'relateListeners' => 'RelateListeners',
        'status' => 'Status',
        'TLSVersions' => 'TLSVersions',
    ];

    public function validate()
    {
        if (\is_array($this->ciphers)) {
            Model::validateArray($this->ciphers);
        }
        if (\is_array($this->relateListeners)) {
            Model::validateArray($this->relateListeners);
        }
        if (\is_array($this->TLSVersions)) {
            Model::validateArray($this->TLSVersions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ciphers) {
            if (\is_array($this->ciphers)) {
                $res['Ciphers'] = [];
                $n1 = 0;
                foreach ($this->ciphers as $item1) {
                    $res['Ciphers'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (\is_array($this->relateListeners)) {
                $res['RelateListeners'] = [];
                $n1 = 0;
                foreach ($this->relateListeners as $item1) {
                    $res['RelateListeners'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->TLSVersions) {
            if (\is_array($this->TLSVersions)) {
                $res['TLSVersions'] = [];
                $n1 = 0;
                foreach ($this->TLSVersions as $item1) {
                    $res['TLSVersions'][$n1] = $item1;
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
        if (isset($map['Ciphers'])) {
            if (!empty($map['Ciphers'])) {
                $model->ciphers = [];
                $n1 = 0;
                foreach ($map['Ciphers'] as $item1) {
                    $model->ciphers[$n1] = $item1;
                    ++$n1;
                }
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
                $n1 = 0;
                foreach ($map['RelateListeners'] as $item1) {
                    $model->relateListeners[$n1] = relateListeners::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TLSVersions'])) {
            if (!empty($map['TLSVersions'])) {
                $model->TLSVersions = [];
                $n1 = 0;
                foreach ($map['TLSVersions'] as $item1) {
                    $model->TLSVersions[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
