<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBInstanceEndpointRequest\nodeItems;

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
        if (\is_array($this->nodeItems)) {
            Model::validateArray($this->nodeItems);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->nodeItems)) {
                $res['NodeItems'] = [];
                $n1               = 0;
                foreach ($this->nodeItems as $item1) {
                    $res['NodeItems'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
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
                $n1               = 0;
                foreach ($map['NodeItems'] as $item1) {
                    $model->nodeItems[$n1++] = nodeItems::fromMap($item1);
                }
            }
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        return $model;
    }
}
