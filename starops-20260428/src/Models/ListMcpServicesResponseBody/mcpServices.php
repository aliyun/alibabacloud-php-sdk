<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\STAROps\V20260428\Models\ListMcpServicesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\STAROps\V20260428\Models\ListMcpServicesResponseBody\mcpServices\mcpServiceList;

class mcpServices extends Model
{
    /**
     * @var mcpServiceList[]
     */
    public $mcpServiceList;
    protected $_name = [
        'mcpServiceList' => 'mcpServiceList',
    ];

    public function validate()
    {
        if (\is_array($this->mcpServiceList)) {
            Model::validateArray($this->mcpServiceList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mcpServiceList) {
            if (\is_array($this->mcpServiceList)) {
                $res['mcpServiceList'] = [];
                $n1 = 0;
                foreach ($this->mcpServiceList as $item1) {
                    $res['mcpServiceList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['mcpServiceList'])) {
            if (!empty($map['mcpServiceList'])) {
                $model->mcpServiceList = [];
                $n1 = 0;
                foreach ($map['mcpServiceList'] as $item1) {
                    $model->mcpServiceList[$n1] = mcpServiceList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
