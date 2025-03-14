<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class GetProgramRequest extends Model
{
    /**
     * @description The name of the channel.
     *
     * This parameter is required.
     *
     * @example MyChannel
     *
     * @var string
     */
    public $channelName;

    /**
     * @description The name of the program.
     *
     * This parameter is required.
     *
     * @example program1
     *
     * @var string
     */
    public $programName;
    protected $_name = [
        'channelName' => 'ChannelName',
        'programName' => 'ProgramName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->channelName) {
            $res['ChannelName'] = $this->channelName;
        }
        if (null !== $this->programName) {
            $res['ProgramName'] = $this->programName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetProgramRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChannelName'])) {
            $model->channelName = $map['ChannelName'];
        }
        if (isset($map['ProgramName'])) {
            $model->programName = $map['ProgramName'];
        }

        return $model;
    }
}
