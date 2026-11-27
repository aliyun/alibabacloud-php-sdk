<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\GetVirtualMcpToolValidationResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetVirtualMcpToolValidationResponseBody\data\items\sources;

class items extends Model
{
    /**
     * @var int
     */
    public $checkedRevision;

    /**
     * @var sources[]
     */
    public $sources;

    /**
     * @var string
     */
    public $virtualMcpServerId;
    protected $_name = [
        'checkedRevision' => 'checkedRevision',
        'sources' => 'sources',
        'virtualMcpServerId' => 'virtualMcpServerId',
    ];

    public function validate()
    {
        if (\is_array($this->sources)) {
            Model::validateArray($this->sources);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkedRevision) {
            $res['checkedRevision'] = $this->checkedRevision;
        }

        if (null !== $this->sources) {
            if (\is_array($this->sources)) {
                $res['sources'] = [];
                $n1 = 0;
                foreach ($this->sources as $item1) {
                    $res['sources'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->virtualMcpServerId) {
            $res['virtualMcpServerId'] = $this->virtualMcpServerId;
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
        if (isset($map['checkedRevision'])) {
            $model->checkedRevision = $map['checkedRevision'];
        }

        if (isset($map['sources'])) {
            if (!empty($map['sources'])) {
                $model->sources = [];
                $n1 = 0;
                foreach ($map['sources'] as $item1) {
                    $model->sources[$n1] = sources::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['virtualMcpServerId'])) {
            $model->virtualMcpServerId = $map['virtualMcpServerId'];
        }

        return $model;
    }
}
