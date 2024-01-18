<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GenerateUploadConfigResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example oss://default/oss-bucket-name/aimiaobi/2021/07/01/1625126400000/1.docx
     *
     * @var string
     */
    public $fileKey;

    /**
     * @var mixed[]
     */
    public $formDatas;

    /**
     * @example https://bucket-name.oss-cn-hangzhou.aliyuncs.com
     *
     * @var string
     */
    public $postUrl;
    protected $_name = [
        'fileKey'   => 'FileKey',
        'formDatas' => 'FormDatas',
        'postUrl'   => 'PostUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileKey) {
            $res['FileKey'] = $this->fileKey;
        }
        if (null !== $this->formDatas) {
            $res['FormDatas'] = $this->formDatas;
        }
        if (null !== $this->postUrl) {
            $res['PostUrl'] = $this->postUrl;
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
        if (isset($map['FileKey'])) {
            $model->fileKey = $map['FileKey'];
        }
        if (isset($map['FormDatas'])) {
            $model->formDatas = $map['FormDatas'];
        }
        if (isset($map['PostUrl'])) {
            $model->postUrl = $map['PostUrl'];
        }

        return $model;
    }
}
