<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateResourceInventoryResponseBody;

use AlibabaCloud\Dara\Model;

class resourceInventory extends Model
{
    /**
     * @var string
     */
    public $downloadUrl;
    /**
     * @var int
     */
    public $resourceInventoryGenerateTime;
    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'downloadUrl'                   => 'DownloadUrl',
        'resourceInventoryGenerateTime' => 'ResourceInventoryGenerateTime',
        'status'                        => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->downloadUrl) {
            $res['DownloadUrl'] = $this->downloadUrl;
        }

        if (null !== $this->resourceInventoryGenerateTime) {
            $res['ResourceInventoryGenerateTime'] = $this->resourceInventoryGenerateTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['DownloadUrl'])) {
            $model->downloadUrl = $map['DownloadUrl'];
        }

        if (isset($map['ResourceInventoryGenerateTime'])) {
            $model->resourceInventoryGenerateTime = $map['ResourceInventoryGenerateTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
