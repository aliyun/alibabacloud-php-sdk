<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListEventBridgeIntegrationsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListEventBridgeIntegrationsResponseBody\pageBean\eventBridgeIntegrations;

class pageBean extends Model
{
    /**
     * @var eventBridgeIntegrations[]
     */
    public $eventBridgeIntegrations;

    /**
     * @var int
     */
    public $page;

    /**
     * @var int
     */
    public $size;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'eventBridgeIntegrations' => 'EventBridgeIntegrations',
        'page' => 'Page',
        'size' => 'Size',
        'total' => 'Total',
    ];

    public function validate()
    {
        if (\is_array($this->eventBridgeIntegrations)) {
            Model::validateArray($this->eventBridgeIntegrations);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eventBridgeIntegrations) {
            if (\is_array($this->eventBridgeIntegrations)) {
                $res['EventBridgeIntegrations'] = [];
                $n1 = 0;
                foreach ($this->eventBridgeIntegrations as $item1) {
                    $res['EventBridgeIntegrations'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }

        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        if (null !== $this->total) {
            $res['Total'] = $this->total;
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
        if (isset($map['EventBridgeIntegrations'])) {
            if (!empty($map['EventBridgeIntegrations'])) {
                $model->eventBridgeIntegrations = [];
                $n1 = 0;
                foreach ($map['EventBridgeIntegrations'] as $item1) {
                    $model->eventBridgeIntegrations[$n1] = eventBridgeIntegrations::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }

        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
