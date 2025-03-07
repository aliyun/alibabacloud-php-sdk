<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaLiveChannelResponseBody\channel\inputAttachments\audioSelectors;

use AlibabaCloud\Tea\Model;

class audioPidSelection extends Model
{
    /**
     * @description A PID from within a source.
     *
     * This parameter is required.
     * @example 123
     *
     * @var int
     */
    public $pid;
    protected $_name = [
        'pid' => 'Pid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pid) {
            $res['Pid'] = $this->pid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return audioPidSelection
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Pid'])) {
            $model->pid = $map['Pid'];
        }

        return $model;
    }
}
