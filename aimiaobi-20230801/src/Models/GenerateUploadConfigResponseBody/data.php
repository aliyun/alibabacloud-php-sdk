<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GenerateUploadConfigResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $fileKey;
    /**
     * @var mixed[]
     */
    public $formDatas;
    /**
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
        if (\is_array($this->formDatas)) {
            Model::validateArray($this->formDatas);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fileKey) {
            $res['FileKey'] = $this->fileKey;
        }

        if (null !== $this->formDatas) {
            if (\is_array($this->formDatas)) {
                $res['FormDatas'] = [];
                foreach ($this->formDatas as $key1 => $value1) {
                    $res['FormDatas'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->postUrl) {
            $res['PostUrl'] = $this->postUrl;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileKey'])) {
            $model->fileKey = $map['FileKey'];
        }

        if (isset($map['FormDatas'])) {
            if (!empty($map['FormDatas'])) {
                $model->formDatas = [];
                foreach ($map['FormDatas'] as $key1 => $value1) {
                    $model->formDatas[$key1] = $value1;
                }
            }
        }

        if (isset($map['PostUrl'])) {
            $model->postUrl = $map['PostUrl'];
        }

        return $model;
    }
}
