<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class CreateLiveRecordTemplateShrinkRequest extends Model
{
    /**
     * @description The name of the template.
     *
     * This parameter is required.
     * @var string
     */
    public $name;

    /**
     * @description The list of recording formats.
     *
     * This parameter is required.
     * @var string
     */
    public $recordFormatShrink;
    protected $_name = [
        'name'               => 'Name',
        'recordFormatShrink' => 'RecordFormat',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return CreateLiveRecordTemplateShrinkRequest
     */
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
