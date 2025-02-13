<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetNodesRequest\option;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetNodesRequest\tenantContext;

class GetNodesRequest extends Model
{
    /**
     * @var string[]
     */
    public $nodeIds;
    /**
     * @var option
     */
    public $option;
    /**
     * @var tenantContext
     */
    public $tenantContext;
    protected $_name = [
        'nodeIds'       => 'NodeIds',
        'option'        => 'Option',
        'tenantContext' => 'TenantContext',
    ];

    public function validate()
    {
        if (\is_array($this->nodeIds)) {
            Model::validateArray($this->nodeIds);
        }
        if (null !== $this->option) {
            $this->option->validate();
        }
        if (null !== $this->tenantContext) {
            $this->tenantContext->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nodeIds) {
            if (\is_array($this->nodeIds)) {
                $res['NodeIds'] = [];
                $n1             = 0;
                foreach ($this->nodeIds as $item1) {
                    $res['NodeIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->option) {
            $res['Option'] = null !== $this->option ? $this->option->toArray($noStream) : $this->option;
        }

        if (null !== $this->tenantContext) {
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toArray($noStream) : $this->tenantContext;
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
        if (isset($map['NodeIds'])) {
            if (!empty($map['NodeIds'])) {
                $model->nodeIds = [];
                $n1             = 0;
                foreach ($map['NodeIds'] as $item1) {
                    $model->nodeIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Option'])) {
            $model->option = option::fromMap($map['Option']);
        }

        if (isset($map['TenantContext'])) {
            $model->tenantContext = tenantContext::fromMap($map['TenantContext']);
        }

        return $model;
    }
}
