<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetServiceRecordResponseBody\record;

class GetServiceRecordResponseBody extends Model
{
    /**
     * @var record
     */
    public $record;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'record' => 'record',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        if (null !== $this->record) {
            $this->record->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->record) {
            $res['record'] = null !== $this->record ? $this->record->toArray($noStream) : $this->record;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['record'])) {
            $model->record = record::fromMap($map['record']);
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
