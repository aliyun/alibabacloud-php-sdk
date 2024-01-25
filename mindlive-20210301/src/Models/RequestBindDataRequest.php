<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MindLive\V20210301\Models;

use AlibabaCloud\Tea\Model;

class RequestBindDataRequest extends Model
{
    /**
     * @var string
     */
    public $liveSource;
    protected $_name = [
        'liveSource' => 'LiveSource',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->liveSource) {
            $res['LiveSource'] = $this->liveSource;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RequestBindDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LiveSource'])) {
            $model->liveSource = $map['LiveSource'];
        }

        return $model;
    }
}
