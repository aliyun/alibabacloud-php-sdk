<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\ListMcpToolsResponseBody;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $inputSchema;

    /**
     * @var string
     */
    public $outputSchema;

    /**
     * @var string
     */
    public $toolDescription;

    /**
     * @var string
     */
    public $toolName;
    protected $_name = [
        'inputSchema' => 'inputSchema',
        'outputSchema' => 'outputSchema',
        'toolDescription' => 'toolDescription',
        'toolName' => 'toolName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->inputSchema) {
            $res['inputSchema'] = $this->inputSchema;
        }

        if (null !== $this->outputSchema) {
            $res['outputSchema'] = $this->outputSchema;
        }

        if (null !== $this->toolDescription) {
            $res['toolDescription'] = $this->toolDescription;
        }

        if (null !== $this->toolName) {
            $res['toolName'] = $this->toolName;
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
        if (isset($map['inputSchema'])) {
            $model->inputSchema = $map['inputSchema'];
        }

        if (isset($map['outputSchema'])) {
            $model->outputSchema = $map['outputSchema'];
        }

        if (isset($map['toolDescription'])) {
            $model->toolDescription = $map['toolDescription'];
        }

        if (isset($map['toolName'])) {
            $model->toolName = $map['toolName'];
        }

        return $model;
    }
}
