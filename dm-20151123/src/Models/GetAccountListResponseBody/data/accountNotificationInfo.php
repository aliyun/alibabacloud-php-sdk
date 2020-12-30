<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models\GetAccountListResponseBody\data;

use AlibabaCloud\Tea\Model;

class accountNotificationInfo extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var string
     */
    public $region;
    protected $_name = [
        'status'     => 'Status',
        'updateTime' => 'UpdateTime',
        'region'     => 'Region',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return accountNotificationInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        return $model;
    }
}
