<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Tea\Model;

class HttpApiApiInfoDeployCntMapValue extends Model
{
    /**
     * @var int
     */
    public $deployedCnt;

    /**
     * @var int
     */
    public $cnt;
    protected $_name = [
        'deployedCnt' => 'deployedCnt',
        'cnt' => 'Cnt',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->deployedCnt) {
            $res['deployedCnt'] = $this->deployedCnt;
        }
        if (null !== $this->cnt) {
            $res['Cnt'] = $this->cnt;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return HttpApiApiInfoDeployCntMapValue
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['deployedCnt'])) {
            $model->deployedCnt = $map['deployedCnt'];
        }
        if (isset($map['Cnt'])) {
            $model->cnt = $map['Cnt'];
        }

        return $model;
    }
}
