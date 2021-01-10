<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idrsservice\V20200630\Models\GetModelSignedUrlResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $publicUrl;

    /**
     * @var string
     */
    public $md5;

    /**
     * @var string
     */
    public $modelPath;
    protected $_name = [
        'publicUrl' => 'PublicUrl',
        'md5'       => 'Md5',
        'modelPath' => 'ModelPath',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->publicUrl) {
            $res['PublicUrl'] = $this->publicUrl;
        }
        if (null !== $this->md5) {
            $res['Md5'] = $this->md5;
        }
        if (null !== $this->modelPath) {
            $res['ModelPath'] = $this->modelPath;
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
        if (isset($map['PublicUrl'])) {
            $model->publicUrl = $map['PublicUrl'];
        }
        if (isset($map['Md5'])) {
            $model->md5 = $map['Md5'];
        }
        if (isset($map['ModelPath'])) {
            $model->modelPath = $map['ModelPath'];
        }

        return $model;
    }
}
