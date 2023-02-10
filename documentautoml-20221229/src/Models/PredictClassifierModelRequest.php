<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DocumentAutoml\V20221229\Models;

use AlibabaCloud\Tea\Model;

class PredictClassifierModelRequest extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $autoPrediction;

    /**
     * @example c0d420955af6bc0761f9207480333cca
     *
     * @var int
     */
    public $classifierId;

    /**
     * @example https://doc-automl-public.oss-cn-hangzhou.aliyuncs.com/3/xxx/stage/upload/20230207/oss-fCeg7ri12SCN5eECeuQdKEDVG9P06tJc.png?Expires=1675744411&OSSAccessKeyId=xxx&Signature=Kchn7sHa1W8mI8JC1D3uPBW2vds%3D
     *
     * @var string
     */
    public $content;
    protected $_name = [
        'autoPrediction' => 'AutoPrediction',
        'classifierId'   => 'ClassifierId',
        'content'        => 'Content',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoPrediction) {
            $res['AutoPrediction'] = $this->autoPrediction;
        }
        if (null !== $this->classifierId) {
            $res['ClassifierId'] = $this->classifierId;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PredictClassifierModelRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoPrediction'])) {
            $model->autoPrediction = $map['AutoPrediction'];
        }
        if (isset($map['ClassifierId'])) {
            $model->classifierId = $map['ClassifierId'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        return $model;
    }
}
