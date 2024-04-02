<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models;

use AlibabaCloud\Tea\Model;

class DescribeBizTypesRequest extends Model
{
    /**
     * @var bool
     */
    public $importFlag;
    protected $_name = [
        'importFlag' => 'ImportFlag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->importFlag) {
            $res['ImportFlag'] = $this->importFlag;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeBizTypesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImportFlag'])) {
            $model->importFlag = $map['ImportFlag'];
        }

        return $model;
    }
}
