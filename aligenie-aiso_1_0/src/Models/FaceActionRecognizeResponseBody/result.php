<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vaiso_1_0\Models\FaceActionRecognizeResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $actionResult;

    /**
     * @var string
     */
    public $faceResult;
    protected $_name = [
        'actionResult' => 'ActionResult',
        'faceResult'   => 'FaceResult',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionResult) {
            $res['ActionResult'] = $this->actionResult;
        }
        if (null !== $this->faceResult) {
            $res['FaceResult'] = $this->faceResult;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActionResult'])) {
            $model->actionResult = $map['ActionResult'];
        }
        if (isset($map['FaceResult'])) {
            $model->faceResult = $map['FaceResult'];
        }

        return $model;
    }
}
