<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class ExportRecordsResponseBody extends Model
{
    /**
     * @description The exported DNS records.
     *
     * @example ;; site:example.com.\\n;; Exported:2024-01-24 15:54:35\\n\\n;; A Records\\na1.example.com. 30 IN A 1.1.1.1 direct\\na2.example.com. 30 IN A 1.1.1.1 direct\\na3.example.com. 30 IN A 1.1.1.1 direct\\n
     *
     * @var string
     */
    public $content;

    /**
     * @description The request ID.
     *
     * @example C69B5894-D1BA-592C-95D0-DADBE7AEAC63
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'content' => 'Content',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExportRecordsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
