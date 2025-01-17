<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class CreateLiveRecordTemplateShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $recordFormatShrink;
    protected $_name = [
        'name'               => 'Name',
        'recordFormatShrink' => 'RecordFormat',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->recordFormatShrink) {
            $res['RecordFormat'] = $this->recordFormatShrink;
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['RecordFormat'])) {
            $model->recordFormatShrink = $map['RecordFormat'];
        }

        return $model;
    }
}
