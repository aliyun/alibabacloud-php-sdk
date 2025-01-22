<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class DeleteProgramRequest extends Model
{
    /**
     * @var string
     */
    public $channelName;
    /**
     * @var string
     */
    public $programName;
    protected $_name = [
        'channelName' => 'ChannelName',
        'programName' => 'ProgramName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
