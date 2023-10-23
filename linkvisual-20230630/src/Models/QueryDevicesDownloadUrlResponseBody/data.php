<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20230630\Models\QueryDevicesDownloadUrlResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $ossDownloadUrl;
    protected $_name = [
        'ossDownloadUrl' => 'OssDownloadUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ossDownloadUrl) {
            $res['OssDownloadUrl'] = $this->ossDownloadUrl;
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
        if (isset($map['OssDownloadUrl'])) {
            $model->ossDownloadUrl = $map['OssDownloadUrl'];
        }

        return $model;
    }
}
