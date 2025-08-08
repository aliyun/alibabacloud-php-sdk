<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListLogicTableRouteConfigResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListLogicTableRouteConfigResponseBody\logicTableRouteConfigList\logicTableRouteConfig;

class logicTableRouteConfigList extends Model
{
    /**
     * @var logicTableRouteConfig[]
     */
    public $logicTableRouteConfig;
    protected $_name = [
        'logicTableRouteConfig' => 'LogicTableRouteConfig',
    ];

    public function validate()
    {
        if (\is_array($this->logicTableRouteConfig)) {
            Model::validateArray($this->logicTableRouteConfig);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->logicTableRouteConfig) {
            if (\is_array($this->logicTableRouteConfig)) {
                $res['LogicTableRouteConfig'] = [];
                $n1 = 0;
                foreach ($this->logicTableRouteConfig as $item1) {
                    $res['LogicTableRouteConfig'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['LogicTableRouteConfig'])) {
            if (!empty($map['LogicTableRouteConfig'])) {
                $model->logicTableRouteConfig = [];
                $n1 = 0;
                foreach ($map['LogicTableRouteConfig'] as $item1) {
                    $model->logicTableRouteConfig[$n1] = logicTableRouteConfig::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
