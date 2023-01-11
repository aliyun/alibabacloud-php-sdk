<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\GetStackResponseBody\log;

use AlibabaCloud\Tea\Model;

class terraformLogs extends Model
{
    /**
     * @example apply
     *
     * @var string
     */
    public $command;

    /**
     * @example Apply complete! Resources: 42 added, 0 changed, 0 destroyed.
     *
     * @var string
     */
    public $content;

    /**
     * @example stdout
     *
     * @var string
     */
    public $stream;
    protected $_name = [
        'command' => 'Command',
        'content' => 'Content',
        'stream'  => 'Stream',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return terraformLogs
     */
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
