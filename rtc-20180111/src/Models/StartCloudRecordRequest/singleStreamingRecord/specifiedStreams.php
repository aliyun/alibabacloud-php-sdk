<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\StartCloudRecordRequest\singleStreamingRecord;

use AlibabaCloud\Tea\Model;

class specifiedStreams extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $ids;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $streamType;

    /**
     * @example white
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'ids' => 'Ids',
        'streamType' => 'StreamType',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->ids) {
            $res['Ids'] = $this->ids;
        }
        if (null !== $this->streamType) {
            $res['StreamType'] = $this->streamType;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return specifiedStreams
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ids'])) {
            if (!empty($map['Ids'])) {
                $model->ids = $map['Ids'];
            }
        }
        if (isset($map['StreamType'])) {
            $model->streamType = $map['StreamType'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
