<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListSiteDeliveryTasksResponseBody;

use AlibabaCloud\Dara\Model;

class tasks extends Model
{
    /**
     * @var string
     */
    public $businessType;
    /**
     * @var string
     */
    public $dataCenter;
    /**
     * @var string
     */
    public $deliveryType;
    /**
     * @var string
     */
    public $status;
    /**
     * @var string
     */
    public $taskName;
    protected $_name = [
        'businessType' => 'BusinessType',
        'dataCenter'   => 'DataCenter',
        'deliveryType' => 'DeliveryType',
        'status'       => 'Status',
        'taskName'     => 'TaskName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->businessType) {
            $res['BusinessType'] = $this->businessType;
        }

        if (null !== $this->dataCenter) {
            $res['DataCenter'] = $this->dataCenter;
        }

        if (null !== $this->deliveryType) {
            $res['DeliveryType'] = $this->deliveryType;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
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
        if (isset($map['BusinessType'])) {
            $model->businessType = $map['BusinessType'];
        }

        if (isset($map['DataCenter'])) {
            $model->dataCenter = $map['DataCenter'];
        }

        if (isset($map['DeliveryType'])) {
            $model->deliveryType = $map['DeliveryType'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        return $model;
    }
}
