<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models\ChangeParseSettingRequest;

use AlibabaCloud\Dara\Model;

class parserConfig extends Model
{
    /**
     * @var string
     */
    public $modelName;

    /**
     * @var string
     */
    public $modelPrompt;
    protected $_name = [
        'modelName' => 'modelName',
        'modelPrompt' => 'modelPrompt',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->modelName) {
            $res['modelName'] = $this->modelName;
        }

        if (null !== $this->modelPrompt) {
            $res['modelPrompt'] = $this->modelPrompt;
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
        if (isset($map['modelName'])) {
            $model->modelName = $map['modelName'];
        }

        if (isset($map['modelPrompt'])) {
            $model->modelPrompt = $map['modelPrompt'];
        }

        return $model;
    }
}
