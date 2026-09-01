<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class UpdateKBSyncLinkResponseBody extends Model
{
    /**
     * @var string
     */
    public $linkId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $syncSchedule;
    protected $_name = [
        'linkId' => 'LinkId',
        'requestId' => 'RequestId',
        'syncSchedule' => 'SyncSchedule',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->linkId) {
            $res['LinkId'] = $this->linkId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->syncSchedule) {
            $res['SyncSchedule'] = $this->syncSchedule;
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
        if (isset($map['LinkId'])) {
            $model->linkId = $map['LinkId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SyncSchedule'])) {
            $model->syncSchedule = $map['SyncSchedule'];
        }

        return $model;
    }
}
