<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20181015\Models\GetInstanceListResponseBody\instanceList\instanceVO\upgradeServiceDetailInfo;

use AlibabaCloud\Tea\Model;

class upgradeServiceDetailInfoVO extends Model
{
    /**
     * @example 0.10
     *
     * @var string
     */
    public $current2OpenSourceVersion;
    protected $_name = [
        'current2OpenSourceVersion' => 'Current2OpenSourceVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->current2OpenSourceVersion) {
            $res['Current2OpenSourceVersion'] = $this->current2OpenSourceVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return upgradeServiceDetailInfoVO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Current2OpenSourceVersion'])) {
            $model->current2OpenSourceVersion = $map['Current2OpenSourceVersion'];
        }

        return $model;
    }
}
