<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifyDBResourceGroupRequest;

use AlibabaCloud\Dara\Model;

class resourceGroupItems extends Model
{
    /**
     * @var string
     */
    public $resourceGroupConfig;

    /**
     * @var string
     */
    public $resourceGroupName;
    protected $_name = [
        'resourceGroupConfig' => 'ResourceGroupConfig',
        'resourceGroupName' => 'ResourceGroupName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->resourceGroupConfig) {
            $res['ResourceGroupConfig'] = $this->resourceGroupConfig;
        }

        if (null !== $this->resourceGroupName) {
            $res['ResourceGroupName'] = $this->resourceGroupName;
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
        if (isset($map['ResourceGroupConfig'])) {
            $model->resourceGroupConfig = $map['ResourceGroupConfig'];
        }

        if (isset($map['ResourceGroupName'])) {
            $model->resourceGroupName = $map['ResourceGroupName'];
        }

        return $model;
    }
}
