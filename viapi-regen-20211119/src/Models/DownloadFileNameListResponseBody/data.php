<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Viapiregen\V20211119\Models\DownloadFileNameListResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $ossHttpUrl;
    protected $_name = [
        'ossHttpUrl' => 'OssHttpUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ossHttpUrl) {
            $res['OssHttpUrl'] = $this->ossHttpUrl;
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
        if (isset($map['OssHttpUrl'])) {
            $model->ossHttpUrl = $map['OssHttpUrl'];
        }

        return $model;
    }
}
