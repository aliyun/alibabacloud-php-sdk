<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idrsservice\V20200630\Models\UploadReportResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 2020-07-14T14:01:41.000+08:00
     *
     * @var string
     */
    public $createdAt;

    /**
     * @example 12
     *
     * @var int
     */
    public $duration;

    /**
     * @example 59b0bbfe-929b-4a8c-9833-3ce7****
     *
     * @var string
     */
    public $id;

    /**
     * @example http://oss.aliyuncs.com/1.mp4.meta
     *
     * @var string
     */
    public $metaUrl;

    /**
     * @example ads32efef43
     *
     * @var string
     */
    public $outerBusinessId;

    /**
     * @example 2020-07-14T14:01:41.000+08:00
     *
     * @var string
     */
    public $recordAt;

    /**
     * @example http://oss.aliyuncs.com/1.mp4.json
     *
     * @var string
     */
    public $resultUrl;

    /**
     * @example record_6570315480571566****
     *
     * @var string
     */
    public $rtcRecordId;

    /**
     * @example http://oss.aliyuncs.com/1.mp4
     *
     * @var string
     */
    public $videoUrl;
    protected $_name = [
        'createdAt'       => 'CreatedAt',
        'duration'        => 'Duration',
        'id'              => 'Id',
        'metaUrl'         => 'MetaUrl',
        'outerBusinessId' => 'OuterBusinessId',
        'recordAt'        => 'RecordAt',
        'resultUrl'       => 'ResultUrl',
        'rtcRecordId'     => 'RtcRecordId',
        'videoUrl'        => 'VideoUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->metaUrl) {
            $res['MetaUrl'] = $this->metaUrl;
        }
        if (null !== $this->outerBusinessId) {
            $res['OuterBusinessId'] = $this->outerBusinessId;
        }
        if (null !== $this->recordAt) {
            $res['RecordAt'] = $this->recordAt;
        }
        if (null !== $this->resultUrl) {
            $res['ResultUrl'] = $this->resultUrl;
        }
        if (null !== $this->rtcRecordId) {
            $res['RtcRecordId'] = $this->rtcRecordId;
        }
        if (null !== $this->videoUrl) {
            $res['VideoUrl'] = $this->videoUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['MetaUrl'])) {
            $model->metaUrl = $map['MetaUrl'];
        }
        if (isset($map['OuterBusinessId'])) {
            $model->outerBusinessId = $map['OuterBusinessId'];
        }
        if (isset($map['RecordAt'])) {
            $model->recordAt = $map['RecordAt'];
        }
        if (isset($map['ResultUrl'])) {
            $model->resultUrl = $map['ResultUrl'];
        }
        if (isset($map['RtcRecordId'])) {
            $model->rtcRecordId = $map['RtcRecordId'];
        }
        if (isset($map['VideoUrl'])) {
            $model->videoUrl = $map['VideoUrl'];
        }

        return $model;
    }
}
