<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\UploadDocRequest;

use AlibabaCloud\Tea\Model;

class docs extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $docName;

    /**
     * @description This parameter is required.
     *
     * @example http://xxx/ccc.pdf
     *
     * @var string
     */
    public $fileUrl;
    protected $_name = [
        'docName' => 'DocName',
        'fileUrl' => 'FileUrl',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->docName) {
            $res['DocName'] = $this->docName;
        }
        if (null !== $this->fileUrl) {
            $res['FileUrl'] = $this->fileUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return docs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DocName'])) {
            $model->docName = $map['DocName'];
        }
        if (isset($map['FileUrl'])) {
            $model->fileUrl = $map['FileUrl'];
        }

        return $model;
    }
}
