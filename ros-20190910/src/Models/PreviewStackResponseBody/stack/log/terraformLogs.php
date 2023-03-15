<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\PreviewStackResponseBody\stack\log;

use AlibabaCloud\Tea\Model;

class terraformLogs extends Model
{
    /**
     * @description The name of the Terraform command. Valid values:
     *
     *   apply
     *   plan
     *   destroy
     *   version
     *
     * For more information about Terraform commands, see [Basic CLI Features](https://www.terraform.io/cli/commands).
     * @example apply
     *
     * @var string
     */
    public $command;

    /**
     * @description The content of the output stream that is returned after the command is run.
     *
     * @example Apply complete! Resources: 42 added, 0 changed, 0 destroyed.
     *
     * @var string
     */
    public $content;

    /**
     * @description The output stream. Valid values:
     *
     *   stdout: standard output stream
     *   stderr: standard error stream
     *
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
