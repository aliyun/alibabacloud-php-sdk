<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\DetectAudioForCustomizedVoiceJobResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $pass;

    /**
     * @var string
     */
    public $reason;
    protected $_name = [
        'pass'   => 'Pass',
        'reason' => 'Reason',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pass) {
            $res['Pass'] = $this->pass;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Pass'])) {
            $model->pass = $map['Pass'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }

        return $model;
    }
}
