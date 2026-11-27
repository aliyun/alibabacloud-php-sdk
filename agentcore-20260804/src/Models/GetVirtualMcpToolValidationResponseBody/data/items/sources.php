<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\GetVirtualMcpToolValidationResponseBody\data\items;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetVirtualMcpToolValidationResponseBody\data\items\sources\tools;

class sources extends Model
{
    /**
     * @var string[]
     */
    public $affectedVirtualMcps;

    /**
     * @var string
     */
    public $checkedAt;

    /**
     * @var string
     */
    public $mcpServerId;

    /**
     * @var string
     */
    public $reasonCode;

    /**
     * @var string
     */
    public $status;

    /**
     * @var tools[]
     */
    public $tools;
    protected $_name = [
        'affectedVirtualMcps' => 'affectedVirtualMcps',
        'checkedAt' => 'checkedAt',
        'mcpServerId' => 'mcpServerId',
        'reasonCode' => 'reasonCode',
        'status' => 'status',
        'tools' => 'tools',
    ];

    public function validate()
    {
        if (\is_array($this->affectedVirtualMcps)) {
            Model::validateArray($this->affectedVirtualMcps);
        }
        if (\is_array($this->tools)) {
            Model::validateArray($this->tools);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->affectedVirtualMcps) {
            if (\is_array($this->affectedVirtualMcps)) {
                $res['affectedVirtualMcps'] = [];
                $n1 = 0;
                foreach ($this->affectedVirtualMcps as $item1) {
                    $res['affectedVirtualMcps'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->checkedAt) {
            $res['checkedAt'] = $this->checkedAt;
        }

        if (null !== $this->mcpServerId) {
            $res['mcpServerId'] = $this->mcpServerId;
        }

        if (null !== $this->reasonCode) {
            $res['reasonCode'] = $this->reasonCode;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->tools) {
            if (\is_array($this->tools)) {
                $res['tools'] = [];
                $n1 = 0;
                foreach ($this->tools as $item1) {
                    $res['tools'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['affectedVirtualMcps'])) {
            if (!empty($map['affectedVirtualMcps'])) {
                $model->affectedVirtualMcps = [];
                $n1 = 0;
                foreach ($map['affectedVirtualMcps'] as $item1) {
                    $model->affectedVirtualMcps[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['checkedAt'])) {
            $model->checkedAt = $map['checkedAt'];
        }

        if (isset($map['mcpServerId'])) {
            $model->mcpServerId = $map['mcpServerId'];
        }

        if (isset($map['reasonCode'])) {
            $model->reasonCode = $map['reasonCode'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['tools'])) {
            if (!empty($map['tools'])) {
                $model->tools = [];
                $n1 = 0;
                foreach ($map['tools'] as $item1) {
                    $model->tools[$n1] = tools::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
