<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeDownloadUrlsForAppKeyResponseBody;

use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeDownloadUrlsForAppKeyResponseBody\urlResult\urls;
use AlibabaCloud\Tea\Model;

class urlResult extends Model
{
    /**
     * @var int
     */
    public $appId;

    /**
     * @var urls
     */
    public $urls;
    protected $_name = [
        'appId' => 'AppId',
        'urls'  => 'Urls',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->urls) {
            $res['Urls'] = null !== $this->urls ? $this->urls->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return urlResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['Urls'])) {
            $model->urls = urls::fromMap($map['Urls']);
        }

        return $model;
    }
}
