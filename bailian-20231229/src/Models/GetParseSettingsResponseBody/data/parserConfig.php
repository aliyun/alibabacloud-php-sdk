<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models\GetParseSettingsResponseBody\data;

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
        'modelName' => 'ModelName',
        'modelPrompt' => 'ModelPrompt',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->modelName) {
            $res['ModelName'] = $this->modelName;
        }

        if (null !== $this->modelPrompt) {
            $res['ModelPrompt'] = $this->modelPrompt;
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
        if (isset($map['ModelName'])) {
            $model->modelName = $map['ModelName'];
        }

        if (isset($map['ModelPrompt'])) {
            $model->modelPrompt = $map['ModelPrompt'];
        }

        return $model;
    }
}
