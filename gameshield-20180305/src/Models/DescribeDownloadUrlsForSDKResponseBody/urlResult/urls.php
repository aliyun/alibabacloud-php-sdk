<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeDownloadUrlsForSDKResponseBody\urlResult;

use AlibabaCloud\Tea\Model;

class urls extends Model
{
    /**
     * @var string
     */
    public $android;

    /**
     * @var string
     */
    public $wins;

    /**
     * @var string
     */
    public $IOS;
    protected $_name = [
        'android' => 'Android',
        'wins'    => 'Wins',
        'IOS'     => 'IOS',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->android) {
            $res['Android'] = $this->android;
        }
        if (null !== $this->wins) {
            $res['Wins'] = $this->wins;
        }
        if (null !== $this->IOS) {
            $res['IOS'] = $this->IOS;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return urls
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Android'])) {
            $model->android = $map['Android'];
        }
        if (isset($map['Wins'])) {
            $model->wins = $map['Wins'];
        }
        if (isset($map['IOS'])) {
            $model->IOS = $map['IOS'];
        }

        return $model;
    }
}
