<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetTaskResponseBody\task;

use AlibabaCloud\Tea\Model;

class script extends Model
{
    /**
     * @description The script content.
     *
     * @example echo "helloWorld"
     *
     * @var string
     */
    public $content;

    /**
     * @description The script parameters.
     *
     * @example para1=$bizdate
     *
     * @var string
     */
    public $parameters;
    protected $_name = [
        'content'    => 'Content',
        'parameters' => 'Parameters',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->parameters) {
            $res['Parameters'] = $this->parameters;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return script
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Parameters'])) {
            $model->parameters = $map['Parameters'];
        }

        return $model;
    }
}
