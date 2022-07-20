<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListLiveTranscodeJobsResponseBody\jobList;

use AlibabaCloud\Tea\Model;

class streamInput extends Model
{
    /**
     * @var string
     */
    public $inputUrl;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'inputUrl' => 'InputUrl',
        'type'     => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->inputUrl) {
            $res['InputUrl'] = $this->inputUrl;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return streamInput
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InputUrl'])) {
            $model->inputUrl = $map['InputUrl'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
