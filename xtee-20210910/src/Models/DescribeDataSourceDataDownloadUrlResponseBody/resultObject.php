<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeDataSourceDataDownloadUrlResponseBody;

use AlibabaCloud\Tea\Model;

class resultObject extends Model
{
    /**
     * @var string
     */
    public $downloadFileUrl;
    protected $_name = [
        'downloadFileUrl' => 'downloadFileUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->downloadFileUrl) {
            $res['downloadFileUrl'] = $this->downloadFileUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resultObject
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['downloadFileUrl'])) {
            $model->downloadFileUrl = $map['downloadFileUrl'];
        }

        return $model;
    }
}
