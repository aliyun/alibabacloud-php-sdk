<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class UpdateServiceRecordRequest extends Model
{
    /**
     * @var string
     */
    public $recordContent;

    /**
     * @var string
     */
    public $recordType;
    protected $_name = [
        'recordContent' => 'recordContent',
        'recordType' => 'recordType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->recordContent) {
            $res['recordContent'] = $this->recordContent;
        }

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
        if (isset($map['recordContent'])) {
            $model->recordContent = $map['recordContent'];
        }

        if (isset($map['recordType'])) {
            $model->recordType = $map['recordType'];
        }

        return $model;
    }
}
