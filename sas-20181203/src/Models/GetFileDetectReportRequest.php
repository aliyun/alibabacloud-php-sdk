<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class GetFileDetectReportRequest extends Model
{
    /**
     * @example 81****
     *
     * @var int
     */
    public $eventId;

    /**
     * @example Basic,,ThreatTypes,Intelligences,Sandbox
     *
     * @var string
     */
    public $field;

    /**
     * @example b63917332950e5d219d0737ffe31****
     *
     * @var string
     */
    public $fileHash;

    /**
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @example object_scan
     *
     * @var string
     */
    public $sourceType;
    protected $_name = [
        'eventId'    => 'EventId',
        'field'      => 'Field',
        'fileHash'   => 'FileHash',
        'lang'       => 'Lang',
        'sourceType' => 'SourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }
        if (null !== $this->field) {
            $res['Field'] = $this->field;
        }
        if (null !== $this->fileHash) {
            $res['FileHash'] = $this->fileHash;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetFileDetectReportRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }
        if (isset($map['Field'])) {
            $model->field = $map['Field'];
        }
        if (isset($map['FileHash'])) {
            $model->fileHash = $map['FileHash'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        return $model;
    }
}
