<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamsBlockListResponseBody;

use AlibabaCloud\Tea\Model;

class streamUrls extends Model
{
    /**
     * @var string[]
     */
    public $streamUrl;
    protected $_name = [
        'streamUrl' => 'StreamUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->streamUrl) {
            $res['StreamUrl'] = $this->streamUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return streamUrls
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StreamUrl'])) {
            if (!empty($map['StreamUrl'])) {
                $model->streamUrl = $map['StreamUrl'];
            }
        }

        return $model;
    }
}
