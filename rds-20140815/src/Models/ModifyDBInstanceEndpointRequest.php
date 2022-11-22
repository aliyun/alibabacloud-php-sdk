<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBInstanceEndpointRequest\nodeItems;
use AlibabaCloud\Tea\Model;

class ModifyDBInstanceEndpointRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $DBInstanceEndpointDescription;

    /**
     * @var string
     */
    public $DBInstanceEndpointId;

    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var nodeItems[]
     */
    public $nodeItems;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'clientToken'                   => 'ClientToken',
        'DBInstanceEndpointDescription' => 'DBInstanceEndpointDescription',
        'DBInstanceEndpointId'          => 'DBInstanceEndpointId',
        'DBInstanceId'                  => 'DBInstanceId',
        'nodeItems'                     => 'NodeItems',
        'resourceOwnerId'               => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->DBInstanceEndpointDescription) {
            $res['DBInstanceEndpointDescription'] = $this->DBInstanceEndpointDescription;
        }
        if (null !== $this->DBInstanceEndpointId) {
            $res['DBInstanceEndpointId'] = $this->DBInstanceEndpointId;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->nodeItems) {
            $res['NodeItems'] = [];
            if (null !== $this->nodeItems && \is_array($this->nodeItems)) {
                $n = 0;
                foreach ($this->nodeItems as $item) {
                    $res['NodeItems'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDBInstanceEndpointRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DBInstanceEndpointDescription'])) {
            $model->DBInstanceEndpointDescription = $map['DBInstanceEndpointDescription'];
        }
        if (isset($map['DBInstanceEndpointId'])) {
            $model->DBInstanceEndpointId = $map['DBInstanceEndpointId'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['NodeItems'])) {
            if (!empty($map['NodeItems'])) {
                $model->nodeItems = [];
                $n                = 0;
                foreach ($map['NodeItems'] as $item) {
                    $model->nodeItems[$n++] = null !== $item ? nodeItems::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        return $model;
    }
}
