<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return GetResourceGroupRequestRequest
     */
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
