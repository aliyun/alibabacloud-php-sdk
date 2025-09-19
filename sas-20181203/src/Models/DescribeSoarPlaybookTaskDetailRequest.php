<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class DescribeSoarPlaybookTaskDetailRequest extends Model
{
    /**
     * @var int
     */
    public $playbookId;

    /**
     * @var int
     */
    public $recordId;

    /**
     * @var string
     */
    public $requestUuid;
    protected $_name = [
        'playbookId' => 'PlaybookId',
        'recordId' => 'RecordId',
        'requestUuid' => 'RequestUuid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->playbookId) {
            $res['PlaybookId'] = $this->playbookId;
        }

        if (null !== $this->recordId) {
            $res['RecordId'] = $this->recordId;
        }

        if (null !== $this->requestUuid) {
            $res['RequestUuid'] = $this->requestUuid;
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
        if (isset($map['PlaybookId'])) {
            $model->playbookId = $map['PlaybookId'];
        }

        if (isset($map['RecordId'])) {
            $model->recordId = $map['RecordId'];
        }

        if (isset($map['RequestUuid'])) {
            $model->requestUuid = $map['RequestUuid'];
        }

        return $model;
    }
}
