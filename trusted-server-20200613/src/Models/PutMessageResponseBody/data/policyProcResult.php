<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trustedserver\V20200613\Models\PutMessageResponseBody\data;

use AlibabaCloud\Tea\Model;

class policyProcResult extends Model
{
    /**
     * @example null
     *
     * @var string
     */
    public $code;

    /**
     * @example null
     *
     * @var string
     */
    public $procData;
    protected $_name = [
        'code'     => 'code',
        'procData' => 'procData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }
        if (null !== $this->procData) {
            $res['procData'] = $this->procData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return policyProcResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }
        if (isset($map['procData'])) {
            $model->procData = $map['procData'];
        }

        return $model;
    }
}
