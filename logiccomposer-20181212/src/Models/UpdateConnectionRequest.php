<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Logiccomposer\V20181212\Models;

use AlibabaCloud\Tea\Model;

class UpdateConnectionRequest extends Model
{
    /**
     * @var string
     */
    public $connector;

    /**
     * @var string
     */
    public $connectionName;

    /**
     * @var string
     */
    public $connectionContent;

    /**
     * @var string
     */
    public $actionType;

    /**
     * @var string
     */
    public $connectionType;
    protected $_name = [
        'connector'         => 'Connector',
        'connectionName'    => 'ConnectionName',
        'connectionContent' => 'ConnectionContent',
        'actionType'        => 'ActionType',
        'connectionType'    => 'ConnectionType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connector) {
            $res['Connector'] = $this->connector;
        }
        if (null !== $this->connectionName) {
            $res['ConnectionName'] = $this->connectionName;
        }
        if (null !== $this->connectionContent) {
            $res['ConnectionContent'] = $this->connectionContent;
        }
        if (null !== $this->actionType) {
            $res['ActionType'] = $this->actionType;
        }
        if (null !== $this->connectionType) {
            $res['ConnectionType'] = $this->connectionType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateConnectionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Connector'])) {
            $model->connector = $map['Connector'];
        }
        if (isset($map['ConnectionName'])) {
            $model->connectionName = $map['ConnectionName'];
        }
        if (isset($map['ConnectionContent'])) {
            $model->connectionContent = $map['ConnectionContent'];
        }
        if (isset($map['ActionType'])) {
            $model->actionType = $map['ActionType'];
        }
        if (isset($map['ConnectionType'])) {
            $model->connectionType = $map['ConnectionType'];
        }

        return $model;
    }
}
