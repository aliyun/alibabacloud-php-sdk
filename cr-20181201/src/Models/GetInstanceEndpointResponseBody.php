<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetInstanceEndpointResponseBody\aclEntries;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetInstanceEndpointResponseBody\domains;

class GetInstanceEndpointResponseBody extends Model
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
     * @var string
     */
    public $code;

    /**
     * @var domains[]
     */
    public $domains;

    /**
     * @var bool
     */
    public $enable;

    /**
     * @var bool
     */
    public $isSuccess;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'aclEnable' => 'AclEnable',
        'aclEntries' => 'AclEntries',
        'code' => 'Code',
        'domains' => 'Domains',
        'enable' => 'Enable',
        'isSuccess' => 'IsSuccess',
        'requestId' => 'RequestId',
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
                    $res['AclEntries'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->domains) {
            if (\is_array($this->domains)) {
                $res['Domains'] = [];
                $n1 = 0;
                foreach ($this->domains as $item1) {
                    $res['Domains'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }

        if (null !== $this->isSuccess) {
            $res['IsSuccess'] = $this->isSuccess;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
                    $model->aclEntries[$n1++] = aclEntries::fromMap($item1);
                }
            }
        }

        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['Domains'])) {
            if (!empty($map['Domains'])) {
                $model->domains = [];
                $n1 = 0;
                foreach ($map['Domains'] as $item1) {
                    $model->domains[$n1++] = domains::fromMap($item1);
                }
            }
        }

        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }

        if (isset($map['IsSuccess'])) {
            $model->isSuccess = $map['IsSuccess'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
