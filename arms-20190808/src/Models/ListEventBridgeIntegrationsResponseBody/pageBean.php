<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListEventBridgeIntegrationsResponseBody;

use AlibabaCloud\SDK\ARMS\V20190808\Models\ListEventBridgeIntegrationsResponseBody\pageBean\eventBridgeIntegrations;
use AlibabaCloud\Tea\Model;

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
        'page'                    => 'Page',
        'size'                    => 'Size',
        'total'                   => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventBridgeIntegrations) {
            $res['EventBridgeIntegrations'] = [];
            if (null !== $this->eventBridgeIntegrations && \is_array($this->eventBridgeIntegrations)) {
                $n = 0;
                foreach ($this->eventBridgeIntegrations as $item) {
                    $res['EventBridgeIntegrations'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return pageBean
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventBridgeIntegrations'])) {
            if (!empty($map['EventBridgeIntegrations'])) {
                $model->eventBridgeIntegrations = [];
                $n                              = 0;
                foreach ($map['EventBridgeIntegrations'] as $item) {
                    $model->eventBridgeIntegrations[$n++] = null !== $item ? eventBridgeIntegrations::fromMap($item) : $item;
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
