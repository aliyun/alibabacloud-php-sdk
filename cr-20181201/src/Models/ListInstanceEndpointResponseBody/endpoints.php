<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models\ListInstanceEndpointResponseBody;

use AlibabaCloud\SDK\Cr\V20181201\Models\ListInstanceEndpointResponseBody\endpoints\aclEntries;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListInstanceEndpointResponseBody\endpoints\domains;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListInstanceEndpointResponseBody\endpoints\linkedVpcs;
use AlibabaCloud\Tea\Model;

class endpoints extends Model
{
    /**
     * @description Indicates whether the access control list (ACL) feature is enabled.
     *
     * @example true
     *
     * @var bool
     */
    public $aclEnable;

    /**
     * @description The ACL configured for the instance.
     *
     * @var aclEntries[]
     */
    public $aclEntries;

    /**
     * @description Domain names.
     *
     * @var domains[]
     */
    public $domains;

    /**
     * @description Indicates whether the ACL feature is enabled.
     *
     * @example true
     *
     * @var bool
     */
    public $enable;

    /**
     * @description The type of the endpoint.
     *
     * @example internet
     *
     * @var string
     */
    public $endpointType;

    /**
     * @description The virtual private clouds (VPCs) that are associated with the instance.
     *
     * @var linkedVpcs[]
     */
    public $linkedVpcs;

    /**
     * @description The status of the instance.
     *
     * @example RUNNING
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'aclEnable'    => 'AclEnable',
        'aclEntries'   => 'AclEntries',
        'domains'      => 'Domains',
        'enable'       => 'Enable',
        'endpointType' => 'EndpointType',
        'linkedVpcs'   => 'LinkedVpcs',
        'status'       => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aclEnable) {
            $res['AclEnable'] = $this->aclEnable;
        }
        if (null !== $this->aclEntries) {
            $res['AclEntries'] = [];
            if (null !== $this->aclEntries && \is_array($this->aclEntries)) {
                $n = 0;
                foreach ($this->aclEntries as $item) {
                    $res['AclEntries'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->domains) {
            $res['Domains'] = [];
            if (null !== $this->domains && \is_array($this->domains)) {
                $n = 0;
                foreach ($this->domains as $item) {
                    $res['Domains'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['LinkedVpcs'] = [];
            if (null !== $this->linkedVpcs && \is_array($this->linkedVpcs)) {
                $n = 0;
                foreach ($this->linkedVpcs as $item) {
                    $res['LinkedVpcs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return endpoints
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AclEnable'])) {
            $model->aclEnable = $map['AclEnable'];
        }
        if (isset($map['AclEntries'])) {
            if (!empty($map['AclEntries'])) {
                $model->aclEntries = [];
                $n                 = 0;
                foreach ($map['AclEntries'] as $item) {
                    $model->aclEntries[$n++] = null !== $item ? aclEntries::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Domains'])) {
            if (!empty($map['Domains'])) {
                $model->domains = [];
                $n              = 0;
                foreach ($map['Domains'] as $item) {
                    $model->domains[$n++] = null !== $item ? domains::fromMap($item) : $item;
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
                $n                 = 0;
                foreach ($map['LinkedVpcs'] as $item) {
                    $model->linkedVpcs[$n++] = null !== $item ? linkedVpcs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
