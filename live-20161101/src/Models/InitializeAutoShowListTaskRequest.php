<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class InitializeAutoShowListTaskRequest extends Model
{
    /**
     * @var string
     */
    public $callBackUrl;

    /**
     * @var string
     */
    public $casterConfig;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $resourceIds;

    /**
     * @var int
     */
    public $startTime;
    protected $_name = [
        'callBackUrl'  => 'CallBackUrl',
        'casterConfig' => 'CasterConfig',
        'domainName'   => 'DomainName',
        'endTime'      => 'EndTime',
        'ownerId'      => 'OwnerId',
        'resourceIds'  => 'ResourceIds',
        'startTime'    => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callBackUrl) {
            $res['CallBackUrl'] = $this->callBackUrl;
        }
        if (null !== $this->casterConfig) {
            $res['CasterConfig'] = $this->casterConfig;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceIds) {
            $res['ResourceIds'] = $this->resourceIds;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InitializeAutoShowListTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallBackUrl'])) {
            $model->callBackUrl = $map['CallBackUrl'];
        }
        if (isset($map['CasterConfig'])) {
            $model->casterConfig = $map['CasterConfig'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceIds'])) {
            $model->resourceIds = $map['ResourceIds'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
