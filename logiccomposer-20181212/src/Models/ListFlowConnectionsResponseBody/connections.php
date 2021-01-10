<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Logiccomposer\V20181212\Models\ListFlowConnectionsResponseBody;

use AlibabaCloud\SDK\Logiccomposer\V20181212\Models\ListFlowConnectionsResponseBody\connections\actions;
use AlibabaCloud\SDK\Logiccomposer\V20181212\Models\ListFlowConnectionsResponseBody\connections\connector;
use AlibabaCloud\Tea\Model;

class connections extends Model
{
    /**
     * @var string
     */
    public $definition;

    /**
     * @var actions[]
     */
    public $actions;

    /**
     * @var string
     */
    public $connectionName;

    /**
     * @var connector
     */
    public $connector;

    /**
     * @var string
     */
    public $content;
    protected $_name = [
        'definition'     => 'Definition',
        'actions'        => 'Actions',
        'connectionName' => 'ConnectionName',
        'connector'      => 'Connector',
        'content'        => 'Content',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->definition) {
            $res['Definition'] = $this->definition;
        }
        if (null !== $this->actions) {
            $res['Actions'] = [];
            if (null !== $this->actions && \is_array($this->actions)) {
                $n = 0;
                foreach ($this->actions as $item) {
                    $res['Actions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->connectionName) {
            $res['ConnectionName'] = $this->connectionName;
        }
        if (null !== $this->connector) {
            $res['Connector'] = null !== $this->connector ? $this->connector->toMap() : null;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return connections
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Definition'])) {
            $model->definition = $map['Definition'];
        }
        if (isset($map['Actions'])) {
            if (!empty($map['Actions'])) {
                $model->actions = [];
                $n              = 0;
                foreach ($map['Actions'] as $item) {
                    $model->actions[$n++] = null !== $item ? actions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ConnectionName'])) {
            $model->connectionName = $map['ConnectionName'];
        }
        if (isset($map['Connector'])) {
            $model->connector = connector::fromMap($map['Connector']);
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        return $model;
    }
}
