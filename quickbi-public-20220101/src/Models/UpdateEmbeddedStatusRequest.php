<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Dara\Model;

class UpdateEmbeddedStatusRequest extends Model
{
    /**
     * @var bool
     */
    public $thirdPartAuthFlag;

    /**
     * @var string
     */
    public $worksId;
    protected $_name = [
        'thirdPartAuthFlag' => 'ThirdPartAuthFlag',
        'worksId' => 'WorksId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
