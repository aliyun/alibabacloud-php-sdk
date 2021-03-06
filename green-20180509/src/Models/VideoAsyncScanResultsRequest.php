<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20180509\Models;

use AlibabaCloud\Tea\Model;

class VideoAsyncScanResultsRequest extends Model
{
    /**
     * @var string
     */
    public $clientInfo;
    protected $_name = [
        'clientInfo' => 'ClientInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientInfo) {
            $res['ClientInfo'] = $this->clientInfo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return VideoAsyncScanResultsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientInfo'])) {
            $model->clientInfo = $map['ClientInfo'];
        }

        return $model;
    }
}
