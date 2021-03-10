<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Afs\V20180112\Models\DescribeAfsVerifySigDataResponseBody;

use AlibabaCloud\Tea\Model;

class nvcVerifyDatas extends Model
{
    /**
     * @var string
     */
    public $time;

    /**
     * @var int
     */
    public $nvcSecVerifyCnt;

    /**
     * @var int
     */
    public $nvcVerifyCnt;
    protected $_name = [
        'time'            => 'Time',
        'nvcSecVerifyCnt' => 'NvcSecVerifyCnt',
        'nvcVerifyCnt'    => 'NvcVerifyCnt',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }
        if (null !== $this->nvcSecVerifyCnt) {
            $res['NvcSecVerifyCnt'] = $this->nvcSecVerifyCnt;
        }
        if (null !== $this->nvcVerifyCnt) {
            $res['NvcVerifyCnt'] = $this->nvcVerifyCnt;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nvcVerifyDatas
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }
        if (isset($map['NvcSecVerifyCnt'])) {
            $model->nvcSecVerifyCnt = $map['NvcSecVerifyCnt'];
        }
        if (isset($map['NvcVerifyCnt'])) {
            $model->nvcVerifyCnt = $map['NvcVerifyCnt'];
        }

        return $model;
    }
}
