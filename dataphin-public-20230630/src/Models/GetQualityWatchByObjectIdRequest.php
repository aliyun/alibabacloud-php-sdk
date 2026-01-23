<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Dara\Model;

class GetQualityWatchByObjectIdRequest extends Model
{
    /**
     * @var int
     */
    public $opTenantId;

    /**
     * @var string
     */
    public $watchObjectId;

    /**
     * @var string
     */
    public $watchType;
    protected $_name = [
        'opTenantId' => 'OpTenantId',
        'watchObjectId' => 'WatchObjectId',
        'watchType' => 'WatchType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }

        if (null !== $this->watchObjectId) {
            $res['WatchObjectId'] = $this->watchObjectId;
        }

        if (null !== $this->watchType) {
            $res['WatchType'] = $this->watchType;
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
        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }

        if (isset($map['WatchObjectId'])) {
            $model->watchObjectId = $map['WatchObjectId'];
        }

        if (isset($map['WatchType'])) {
            $model->watchType = $map['WatchType'];
        }

        return $model;
    }
}
