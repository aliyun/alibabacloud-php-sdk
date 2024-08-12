<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models\GetVersionDownloadUrlResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $fullDownloadUrl;
    protected $_name = [
        'fullDownloadUrl' => 'FullDownloadUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fullDownloadUrl) {
            $res['FullDownloadUrl'] = $this->fullDownloadUrl;
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
        if (isset($map['FullDownloadUrl'])) {
            $model->fullDownloadUrl = $map['FullDownloadUrl'];
        }

        return $model;
    }
}
