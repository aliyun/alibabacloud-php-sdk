<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class ExportImageResponseBody extends Model
{
    /**
     * @description The URL that points to the exported image.
     *
     * @example http://oss.url
     *
     * @var string
     */
    public $exportedImageURL;

    /**
     * @description The ID of the request.
     *
     * @example 43A426AD-3F2E-5DD9-9C08-D4DBDCA48D85
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'exportedImageURL' => 'ExportedImageURL',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->exportedImageURL) {
            $res['ExportedImageURL'] = $this->exportedImageURL;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExportImageResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExportedImageURL'])) {
            $model->exportedImageURL = $map['ExportedImageURL'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
