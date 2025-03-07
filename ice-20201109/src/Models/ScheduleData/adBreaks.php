<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ScheduleData;

use AlibabaCloud\Tea\Model;

class adBreaks extends Model
{
    /**
     * @var string
     */
    public $messageType;

    /**
     * @var string
     */
    public $offsetMillis;

    /**
     * @var string
     */
    public $sourceLocationName;

    /**
     * @var string
     */
    public $sourceName;

    /**
     * @var string
     */
    public $spliceInsertSettings;

    /**
     * @var string
     */
    public $timeSignalSettings;
    protected $_name = [
        'messageType'          => 'MessageType',
        'offsetMillis'         => 'OffsetMillis',
        'sourceLocationName'   => 'SourceLocationName',
        'sourceName'           => 'SourceName',
        'spliceInsertSettings' => 'SpliceInsertSettings',
        'timeSignalSettings'   => 'TimeSignalSettings',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->messageType) {
            $res['MessageType'] = $this->messageType;
        }
        if (null !== $this->offsetMillis) {
            $res['OffsetMillis'] = $this->offsetMillis;
        }
        if (null !== $this->sourceLocationName) {
            $res['SourceLocationName'] = $this->sourceLocationName;
        }
        if (null !== $this->sourceName) {
            $res['SourceName'] = $this->sourceName;
        }
        if (null !== $this->spliceInsertSettings) {
            $res['SpliceInsertSettings'] = $this->spliceInsertSettings;
        }
        if (null !== $this->timeSignalSettings) {
            $res['TimeSignalSettings'] = $this->timeSignalSettings;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return adBreaks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MessageType'])) {
            $model->messageType = $map['MessageType'];
        }
        if (isset($map['OffsetMillis'])) {
            $model->offsetMillis = $map['OffsetMillis'];
        }
        if (isset($map['SourceLocationName'])) {
            $model->sourceLocationName = $map['SourceLocationName'];
        }
        if (isset($map['SourceName'])) {
            $model->sourceName = $map['SourceName'];
        }
        if (isset($map['SpliceInsertSettings'])) {
            $model->spliceInsertSettings = $map['SpliceInsertSettings'];
        }
        if (isset($map['TimeSignalSettings'])) {
            $model->timeSignalSettings = $map['TimeSignalSettings'];
        }

        return $model;
    }
}
