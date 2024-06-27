<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\DataSetBloodResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example ccd3428c-****-****-a608-26bae29dffee
     *
     * @var string
     */
    public $worksId;

    /**
     * @example PAGE
     *
     * @var string
     */
    public $worksType;
    protected $_name = [
        'worksId'   => 'WorksId',
        'worksType' => 'WorksType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->worksId) {
            $res['WorksId'] = $this->worksId;
        }
        if (null !== $this->worksType) {
            $res['WorksType'] = $this->worksType;
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
        if (isset($map['WorksId'])) {
            $model->worksId = $map['WorksId'];
        }
        if (isset($map['WorksType'])) {
            $model->worksType = $map['WorksType'];
        }

        return $model;
    }
}
