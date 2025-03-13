<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class GetPipelineArtifactUrlRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example test.tgz
     *
     * @var string
     */
    public $fileName;

    /**
     * @description This parameter is required.
     *
     * @example /test/test/test.tgz
     *
     * @var string
     */
    public $filePath;
    protected $_name = [
        'fileName' => 'fileName',
        'filePath' => 'filePath',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileName) {
            $res['fileName'] = $this->fileName;
        }
        if (null !== $this->filePath) {
            $res['filePath'] = $this->filePath;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPipelineArtifactUrlRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['fileName'])) {
            $model->fileName = $map['fileName'];
        }
        if (isset($map['filePath'])) {
            $model->filePath = $map['filePath'];
        }

        return $model;
    }
}
