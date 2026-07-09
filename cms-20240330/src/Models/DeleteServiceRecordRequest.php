<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class DeleteServiceRecordRequest extends Model
{
    /**
     * @var string
     */
    public $recordType;
    protected $_name = [
        'recordType' => 'recordType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->recordType) {
            $res['recordType'] = $this->recordType;
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
        if (isset($map['recordType'])) {
            $model->recordType = $map['recordType'];
        }

        return $model;
    }
}
