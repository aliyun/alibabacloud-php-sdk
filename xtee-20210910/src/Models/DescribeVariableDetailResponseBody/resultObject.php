<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeVariableDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeVariableDetailResponseBody\resultObject\baseInfo;

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
        if (null !== $this->baseInfo) {
            $this->baseInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->baseInfo) {
            $res['baseInfo'] = null !== $this->baseInfo ? $this->baseInfo->toArray($noStream) : $this->baseInfo;
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
        if (isset($map['baseInfo'])) {
            $model->baseInfo = baseInfo::fromMap($map['baseInfo']);
        }

        return $model;
    }
}
