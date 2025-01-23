<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Dara\Model;

class GetResourceGroupRequestRequest extends Model
{
    /**
     * @var string
     */
    public $podStatus;
    /**
     * @var string
     */
    public $resourceGroupID;
    protected $_name = [
        'podStatus'       => 'PodStatus',
        'resourceGroupID' => 'ResourceGroupID',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->podStatus) {
            $res['PodStatus'] = $this->podStatus;
        }

        if (null !== $this->resourceGroupID) {
            $res['ResourceGroupID'] = $this->resourceGroupID;
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
        if (isset($map['PodStatus'])) {
            $model->podStatus = $map['PodStatus'];
        }

        if (isset($map['ResourceGroupID'])) {
            $model->resourceGroupID = $map['ResourceGroupID'];
        }

        return $model;
    }
}
