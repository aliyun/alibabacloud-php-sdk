<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\GetPolarAgentResponseBody;

use AlibabaCloud\Dara\Model;

class uiFunctionCall extends Model
{
    /**
     * @var string
     */
    public $argsText;

    /**
     * @var string
     */
    public $toolName;
    protected $_name = [
        'argsText' => 'ArgsText',
        'toolName' => 'ToolName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->argsText) {
            $res['ArgsText'] = $this->argsText;
        }

        if (null !== $this->toolName) {
            $res['ToolName'] = $this->toolName;
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
        if (isset($map['ArgsText'])) {
            $model->argsText = $map['ArgsText'];
        }

        if (isset($map['ToolName'])) {
            $model->toolName = $map['ToolName'];
        }

        return $model;
    }
}
