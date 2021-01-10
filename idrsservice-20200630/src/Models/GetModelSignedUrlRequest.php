<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idrsservice\V20200630\Models;

use AlibabaCloud\Tea\Model;

class GetModelSignedUrlRequest extends Model
{
    /**
     * @var string[]
     */
    public $modelPath;
    protected $_name = [
        'modelPath' => 'ModelPath',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->modelPath) {
            $res['ModelPath'] = $this->modelPath;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetModelSignedUrlRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ModelPath'])) {
            if (!empty($map['ModelPath'])) {
                $model->modelPath = $map['ModelPath'];
            }
        }

        return $model;
    }
}
