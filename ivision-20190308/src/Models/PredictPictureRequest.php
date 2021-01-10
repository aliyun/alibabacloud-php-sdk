<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ivision\V20190308\Models;

use AlibabaCloud\Tea\Model;

class PredictPictureRequest extends Model
{
    /**
     * @var string
     */
    public $algorithmCode;

    /**
     * @var string
     */
    public $ossPath;
    protected $_name = [
        'algorithmCode' => 'AlgorithmCode',
        'ossPath'       => 'OssPath',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->algorithmCode) {
            $res['AlgorithmCode'] = $this->algorithmCode;
        }
        if (null !== $this->ossPath) {
            $res['OssPath'] = $this->ossPath;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PredictPictureRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlgorithmCode'])) {
            $model->algorithmCode = $map['AlgorithmCode'];
        }
        if (isset($map['OssPath'])) {
            $model->ossPath = $map['OssPath'];
        }

        return $model;
    }
}
