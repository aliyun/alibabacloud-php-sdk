<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdmeter\V20210425\Models;

use AlibabaCloud\Tea\Model;

class DescribeNewPlayVideoPlaySessioninfoRequest extends Model
{
    /**
     * @var string
     */
    public $VPS;
    protected $_name = [
        'VPS' => 'VPS',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->VPS) {
            $res['VPS'] = $this->VPS;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeNewPlayVideoPlaySessioninfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VPS'])) {
            $model->VPS = $map['VPS'];
        }

        return $model;
    }
}
