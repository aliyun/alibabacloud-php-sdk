<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class ExtractDocumentTextResponseBody extends Model
{
    /**
     * @var string
     */
    public $documentText;

    /**
     * @example 94D6F994-E298-037E-8E8B-0090F27*****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'documentText' => 'DocumentText',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->documentText) {
            $res['DocumentText'] = $this->documentText;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExtractDocumentTextResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DocumentText'])) {
            $model->documentText = $map['DocumentText'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
