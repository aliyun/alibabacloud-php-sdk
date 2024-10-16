<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models\AddFileResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The primary key ID of the document. We recommend that you store the ID because it is required for all subsequent API operations related to this document.
     *
     * @example file_9a65732555b54d5ea10796ca5742ba22_XXXXXXXX
     *
     * @var string
     */
    public $fileId;

    /**
     * @description The parser that is used to parse the document. Valid value:
     *
     *   DASHSCOPE_DOCMIND: Intelligent document parsing by Alibaba Cloud.
     *
     * @example DASHSCOPE_DOCMIND
     *
     * @var string
     */
    public $parser;
    protected $_name = [
        'fileId' => 'FileId',
        'parser' => 'Parser',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }
        if (null !== $this->parser) {
            $res['Parser'] = $this->parser;
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
        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }
        if (isset($map['Parser'])) {
            $model->parser = $map['Parser'];
        }

        return $model;
    }
}
