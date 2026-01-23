<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpsertQualityWatchAlertRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpsertQualityWatchAlertRequest\upsertCommand\qualityAlertInfo;

class upsertCommand extends Model
{
    /**
     * @var qualityAlertInfo
     */
    public $qualityAlertInfo;

    /**
     * @var int
     */
    public $watchId;
    protected $_name = [
        'qualityAlertInfo' => 'QualityAlertInfo',
        'watchId' => 'WatchId',
    ];

    public function validate()
    {
        if (null !== $this->qualityAlertInfo) {
            $this->qualityAlertInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->qualityAlertInfo) {
            $res['QualityAlertInfo'] = null !== $this->qualityAlertInfo ? $this->qualityAlertInfo->toArray($noStream) : $this->qualityAlertInfo;
        }

        if (null !== $this->watchId) {
            $res['WatchId'] = $this->watchId;
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
        if (isset($map['QualityAlertInfo'])) {
            $model->qualityAlertInfo = qualityAlertInfo::fromMap($map['QualityAlertInfo']);
        }

        if (isset($map['WatchId'])) {
            $model->watchId = $map['WatchId'];
        }

        return $model;
    }
}
