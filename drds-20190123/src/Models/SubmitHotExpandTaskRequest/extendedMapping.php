<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\SubmitHotExpandTaskRequest;

use AlibabaCloud\Tea\Model;

class extendedMapping extends Model
{
    /**
     * @description The name of the source physical database.
     *
     * @example test
     *
     * @var string
     */
    public $srcDb;

    /**
     * @description The ID of the ApsaraDB RDS instance to which the source physical database belongs.
     *
     * @example rm-bp1t1mk5a5bdj****
     *
     * @var string
     */
    public $srcInstanceId;
    protected $_name = [
        'srcDb'         => 'SrcDb',
        'srcInstanceId' => 'SrcInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->srcDb) {
            $res['SrcDb'] = $this->srcDb;
        }
        if (null !== $this->srcInstanceId) {
            $res['SrcInstanceId'] = $this->srcInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return extendedMapping
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SrcDb'])) {
            $model->srcDb = $map['SrcDb'];
        }
        if (isset($map['SrcInstanceId'])) {
            $model->srcInstanceId = $map['SrcInstanceId'];
        }

        return $model;
    }
}
