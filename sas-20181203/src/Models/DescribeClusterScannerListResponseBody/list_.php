<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeClusterScannerListResponseBody;

use AlibabaCloud\Dara\Model;

class list_ extends Model
{
    /**
     * @var int
     */
    public $lastTime;

    /**
     * @var bool
     */
    public $needUpdate;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $version;

    /**
     * @var int
     */
    public $webhookOpen;

    /**
     * @var string
     */
    public $webhookStatus;
    protected $_name = [
        'lastTime' => 'LastTime',
        'needUpdate' => 'NeedUpdate',
        'status' => 'Status',
        'version' => 'Version',
        'webhookOpen' => 'WebhookOpen',
        'webhookStatus' => 'WebhookStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lastTime) {
            $res['LastTime'] = $this->lastTime;
        }

        if (null !== $this->needUpdate) {
            $res['NeedUpdate'] = $this->needUpdate;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        if (null !== $this->webhookOpen) {
            $res['WebhookOpen'] = $this->webhookOpen;
        }

        if (null !== $this->webhookStatus) {
            $res['WebhookStatus'] = $this->webhookStatus;
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
        if (isset($map['LastTime'])) {
            $model->lastTime = $map['LastTime'];
        }

        if (isset($map['NeedUpdate'])) {
            $model->needUpdate = $map['NeedUpdate'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        if (isset($map['WebhookOpen'])) {
            $model->webhookOpen = $map['WebhookOpen'];
        }

        if (isset($map['WebhookStatus'])) {
            $model->webhookStatus = $map['WebhookStatus'];
        }

        return $model;
    }
}
