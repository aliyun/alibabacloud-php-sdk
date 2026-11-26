<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Dara\Model;

class AddScriptHotWordRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $hotWord;

    /**
     * @var string
     */
    public $scriptRecordId;
    protected $_name = [
        'description' => 'description',
        'hotWord' => 'hotWord',
        'scriptRecordId' => 'scriptRecordId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->hotWord) {
            $res['hotWord'] = $this->hotWord;
        }

        if (null !== $this->scriptRecordId) {
            $res['scriptRecordId'] = $this->scriptRecordId;
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
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['hotWord'])) {
            $model->hotWord = $map['hotWord'];
        }

        if (isset($map['scriptRecordId'])) {
            $model->scriptRecordId = $map['scriptRecordId'];
        }

        return $model;
    }
}
