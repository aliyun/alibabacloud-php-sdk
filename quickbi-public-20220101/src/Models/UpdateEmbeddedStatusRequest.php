<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class UpdateEmbeddedStatusRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example true
     *
     * @var bool
     */
    public $thirdPartAuthFlag;

    /**
     * @description This parameter is required.
     *
     * @example 897ce25e-f993-4abd-af84-d13c5610****
     *
     * @var string
     */
    public $worksId;
    protected $_name = [
        'thirdPartAuthFlag' => 'ThirdPartAuthFlag',
        'worksId'           => 'WorksId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->thirdPartAuthFlag) {
            $res['ThirdPartAuthFlag'] = $this->thirdPartAuthFlag;
        }
        if (null !== $this->worksId) {
            $res['WorksId'] = $this->worksId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateEmbeddedStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ThirdPartAuthFlag'])) {
            $model->thirdPartAuthFlag = $map['ThirdPartAuthFlag'];
        }
        if (isset($map['WorksId'])) {
            $model->worksId = $map['WorksId'];
        }

        return $model;
    }
}
