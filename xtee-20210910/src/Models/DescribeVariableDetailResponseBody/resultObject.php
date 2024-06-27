<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeVariableDetailResponseBody;

use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeVariableDetailResponseBody\resultObject\baseInfo;
use AlibabaCloud\Tea\Model;

class resultObject extends Model
{
    /**
     * @var baseInfo
     */
    public $baseInfo;
    protected $_name = [
        'baseInfo' => 'baseInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->baseInfo) {
            $res['baseInfo'] = null !== $this->baseInfo ? $this->baseInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resultObject
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['baseInfo'])) {
            $model->baseInfo = baseInfo::fromMap($map['baseInfo']);
        }

        return $model;
    }
}
