<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\SDK\Cr\V20181201\Models\GetInstanceEndpointResponseBody\aclEntries;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetInstanceEndpointResponseBody\domains;
use AlibabaCloud\Tea\Model;

class GetInstanceEndpointResponseBody extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var domains[]
     */
    public $domains;

    /**
     * @var aclEntries[]
     */
    public $aclEntries;

    /**
     * @var bool
     */
    public $isSuccess;

    /**
     * @var bool
     */
    public $aclEnable;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $enable;

    /**
     * @var string
     */
    public $code;
    protected $_name = [
        'status'     => 'Status',
        'domains'    => 'Domains',
        'aclEntries' => 'AclEntries',
        'isSuccess'  => 'IsSuccess',
        'aclEnable'  => 'AclEnable',
        'requestId'  => 'RequestId',
        'enable'     => 'Enable',
        'code'       => 'Code',
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
        if (null !== $this->domains) {
            $res['Domains'] = [];
            if (null !== $this->domains && \is_array($this->domains)) {
                $n = 0;
                foreach ($this->domains as $item) {
                    $res['Domains'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (null !== $this->isSuccess) {
            $res['IsSuccess'] = $this->isSuccess;
        }
        if (null !== $this->aclEnable) {
            $res['AclEnable'] = $this->aclEnable;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetInstanceEndpointResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
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
        if (isset($map['AclEntries'])) {
            if (!empty($map['AclEntries'])) {
                $model->aclEntries = [];
                $n                 = 0;
                foreach ($map['AclEntries'] as $item) {
                    $model->aclEntries[$n++] = null !== $item ? aclEntries::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['IsSuccess'])) {
            $model->isSuccess = $map['IsSuccess'];
        }
        if (isset($map['AclEnable'])) {
            $model->aclEnable = $map['AclEnable'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        return $model;
    }
}
