<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models;

use AlibabaCloud\Tea\Model;

class UploadFlexRulesFileForParseRequest extends Model
{
    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $fileKey;
    protected $_name = [
        'sourceIp' => 'SourceIp',
        'fileKey'  => 'FileKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->fileKey) {
            $res['FileKey'] = $this->fileKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UploadFlexRulesFileForParseRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['FileKey'])) {
            $model->fileKey = $map['FileKey'];
        }

        return $model;
    }
}
