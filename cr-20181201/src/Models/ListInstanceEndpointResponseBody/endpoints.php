<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models\ListInstanceEndpointResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListInstanceEndpointResponseBody\endpoints\aclEntries;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListInstanceEndpointResponseBody\endpoints\domains;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListInstanceEndpointResponseBody\endpoints\linkedVpcs;

class endpoints extends Model
{
    /**
     * @var bool
     */
    public $aclEnable;

    /**
     * @var aclEntries[]
     */
    public $aclEntries;

    /**
     * @var domains[]
     */
    public $domains;

    /**
     * @var bool
     */
    public $enable;

    /**
     * @var string
     */
    public $endpointType;

    /**
     * @var linkedVpcs[]
     */
    public $linkedVpcs;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'aclEnable' => 'AclEnable',
        'aclEntries' => 'AclEntries',
        'domains' => 'Domains',
        'enable' => 'Enable',
        'endpointType' => 'EndpointType',
        'linkedVpcs' => 'LinkedVpcs',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->aclEntries)) {
            Model::validateArray($this->aclEntries);
        }
        if (\is_array($this->domains)) {
            Model::validateArray($this->domains);
        }
        if (\is_array($this->linkedVpcs)) {
            Model::validateArray($this->linkedVpcs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aclEnable) {
            $res['AclEnable'] = $this->aclEnable;
        }

        if (null !== $this->aclEntries) {
            if (\is_array($this->aclEntries)) {
                $res['AclEntries'] = [];
                $n1 = 0;
                foreach ($this->aclEntries as $item1) {
                    $res['AclEntries'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->domains) {
            if (\is_array($this->domains)) {
                $res['Domains'] = [];
                $n1 = 0;
                foreach ($this->domains as $item1) {
                    $res['Domains'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }

        if (null !== $this->endpointType) {
            $res['EndpointType'] = $this->endpointType;
        }

        if (null !== $this->linkedVpcs) {
            if (\is_array($this->linkedVpcs)) {
                $res['LinkedVpcs'] = [];
                $n1 = 0;
                foreach ($this->linkedVpcs as $item1) {
                    $res['LinkedVpcs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['AclEnable'])) {
            $model->aclEnable = $map['AclEnable'];
        }

        if (isset($map['AclEntries'])) {
            if (!empty($map['AclEntries'])) {
                $model->aclEntries = [];
                $n1 = 0;
                foreach ($map['AclEntries'] as $item1) {
                    $model->aclEntries[$n1] = aclEntries::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Domains'])) {
            if (!empty($map['Domains'])) {
                $model->domains = [];
                $n1 = 0;
                foreach ($map['Domains'] as $item1) {
                    $model->domains[$n1] = domains::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }

        if (isset($map['EndpointType'])) {
            $model->endpointType = $map['EndpointType'];
        }

        if (isset($map['LinkedVpcs'])) {
            if (!empty($map['LinkedVpcs'])) {
                $model->linkedVpcs = [];
                $n1 = 0;
                foreach ($map['LinkedVpcs'] as $item1) {
                    $model->linkedVpcs[$n1] = linkedVpcs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
