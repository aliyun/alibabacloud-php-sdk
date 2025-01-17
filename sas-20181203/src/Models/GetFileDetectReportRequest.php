<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class GetFileDetectReportRequest extends Model
{
    /**
     * @var int
     */
    public $eventId;
    /**
     * @var string
     */
    public $field;
    /**
     * @var string
     */
    public $fileHash;
    /**
     * @var string
     */
    public $lang;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
