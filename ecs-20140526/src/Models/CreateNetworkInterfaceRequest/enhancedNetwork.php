<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\CreateNetworkInterfaceRequest;

use AlibabaCloud\Tea\Model;

class enhancedNetwork extends Model
{
    /**
     * @description >  This parameter is not publicly available.
     *
     * @example true
     *
     * @var bool
     */
    public $enableRss;

    /**
     * @description >  This parameter is not publicly available.
     *
     * @example true
     *
     * @var bool
     */
    public $enableSriov;

    /**
     * @var int
     */
    public $virtualFunctionQuantity;

    /**
     * @var int
     */
    public $virtualFunctionTotalQueueNumber;
    protected $_name = [
        'enableRss' => 'EnableRss',
        'enableSriov' => 'EnableSriov',
        'virtualFunctionQuantity' => 'VirtualFunctionQuantity',
        'virtualFunctionTotalQueueNumber' => 'VirtualFunctionTotalQueueNumber',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableRss) {
            $res['EnableRss'] = $this->enableRss;
        }
        if (null !== $this->enableSriov) {
            $res['EnableSriov'] = $this->enableSriov;
        }
        if (null !== $this->virtualFunctionQuantity) {
            $res['VirtualFunctionQuantity'] = $this->virtualFunctionQuantity;
        }
        if (null !== $this->virtualFunctionTotalQueueNumber) {
            $res['VirtualFunctionTotalQueueNumber'] = $this->virtualFunctionTotalQueueNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return enhancedNetwork
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnableRss'])) {
            $model->enableRss = $map['EnableRss'];
        }
        if (isset($map['EnableSriov'])) {
            $model->enableSriov = $map['EnableSriov'];
        }
        if (isset($map['VirtualFunctionQuantity'])) {
            $model->virtualFunctionQuantity = $map['VirtualFunctionQuantity'];
        }
        if (isset($map['VirtualFunctionTotalQueueNumber'])) {
            $model->virtualFunctionTotalQueueNumber = $map['VirtualFunctionTotalQueueNumber'];
        }

        return $model;
    }
}
