<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateMemoryStoreRequest;

use AlibabaCloud\Dara\Model;

class body extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $extractInstructions;

    /**
     * @var string
     */
    public $memoryStoreName;
    protected $_name = [
        'description' => 'description',
        'extractInstructions' => 'extractInstructions',
        'memoryStoreName' => 'memoryStoreName',
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

        if (null !== $this->extractInstructions) {
            $res['extractInstructions'] = $this->extractInstructions;
        }

        if (null !== $this->memoryStoreName) {
            $res['memoryStoreName'] = $this->memoryStoreName;
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

        if (isset($map['extractInstructions'])) {
            $model->extractInstructions = $map['extractInstructions'];
        }

        if (isset($map['memoryStoreName'])) {
            $model->memoryStoreName = $map['memoryStoreName'];
        }

        return $model;
    }
}
