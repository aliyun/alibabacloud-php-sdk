<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models\GetTaskResponseBody\taskDetail\log;

use AlibabaCloud\Dara\Model;

class terraformLogs extends Model
{
    /**
     * @var string
     */
    public $command;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $stream;
    protected $_name = [
        'command' => 'Command',
        'content' => 'Content',
        'stream' => 'Stream',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->command) {
            $res['Command'] = $this->command;
        }

        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->stream) {
            $res['Stream'] = $this->stream;
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
        if (isset($map['Command'])) {
            $model->command = $map['Command'];
        }

        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['Stream'])) {
            $model->stream = $map['Stream'];
        }

        return $model;
    }
}
