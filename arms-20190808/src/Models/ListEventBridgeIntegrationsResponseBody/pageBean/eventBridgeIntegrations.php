<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListEventBridgeIntegrationsResponseBody\pageBean;

use AlibabaCloud\Tea\Model;

class eventBridgeIntegrations extends Model
{
    /**
     * @description The description of the EventBridge integration.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the EventBridge integration.
     *
     * @example 123
     *
     * @var int
     */
    public $id;

    /**
     * @description The name of the EventBridge integration.
     *
     * @example EventBridge_Test
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'description' => 'Description',
        'id'          => 'Id',
        'name'        => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return eventBridgeIntegrations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
