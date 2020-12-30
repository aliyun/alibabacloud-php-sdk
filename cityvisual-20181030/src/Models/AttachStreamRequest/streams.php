<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cityvisual\V20181030\Models\AttachStreamRequest;

use AlibabaCloud\Tea\Model;

class streams extends Model
{
    /**
     * @var string
     */
    public $streamName;

    /**
     * @var string
     */
    public $streamURL;
    protected $_name = [
        'streamName' => 'StreamName',
        'streamURL'  => 'StreamURL',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->streamName) {
            $res['StreamName'] = $this->streamName;
        }
        if (null !== $this->streamURL) {
            $res['StreamURL'] = $this->streamURL;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return streams
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StreamName'])) {
            $model->streamName = $map['StreamName'];
        }
        if (isset($map['StreamURL'])) {
            $model->streamURL = $map['StreamURL'];
        }

        return $model;
    }
}
