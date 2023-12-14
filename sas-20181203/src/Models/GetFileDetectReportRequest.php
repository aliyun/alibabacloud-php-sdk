<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class GetFileDetectReportRequest extends Model
{
    /**
     * @description The event ID that corresponds to the file to be detected.
     *
     * @example 81****
     *
     * @var int
     */
    public $eventId;

    /**
     * @description The field that you want to query. You can enter multiple fields and separate them with commas (,).
     *
     * Valid values:
     *
     *   **ThreatTypes**: the type of the threat intelligence event
     *   **Intelligences**: the threat intelligence event
     *   **ThreatLevel**: the level of the threat intelligence event
     *   **Basic**: the basic information about the report (the scan result)
     *   **Sandbox**: the cloud sandbox check report
     *
     * @example Basic,,ThreatTypes,Intelligences,Sandbox
     *
     * @var string
     */
    public $field;

    /**
     * @description The hash value of the file to be detected.
     *
     * @example b63917332950e5d219d0737ffe31****
     *
     * @var string
     */
    public $fileHash;

    /**
     * @description The language of the content within the request and response. Valid values:
     *
     *   **zh**: Chinese
     *   **en**: English
     *
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @description The data source type. Valid values:
     *
     *   **machine**: host alerts
     *   **object_scan**: file detection alerts
     *
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
