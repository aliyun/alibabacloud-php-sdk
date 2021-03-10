<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Afs\V20180112\Models\DescribeAfsVerifySigDataResponseBody;

use AlibabaCloud\Tea\Model;

class nvcSecDatas extends Model
{
    /**
     * @var string
     */
    public $time;

    /**
     * @var int
     */
    public $nvcSecBlock;

    /**
     * @var int
     */
    public $nvcSecPass;
    protected $_name = [
        'time'        => 'Time',
        'nvcSecBlock' => 'NvcSecBlock',
        'nvcSecPass'  => 'NvcSecPass',
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
        if (null !== $this->nvcSecBlock) {
            $res['NvcSecBlock'] = $this->nvcSecBlock;
        }
        if (null !== $this->nvcSecPass) {
            $res['NvcSecPass'] = $this->nvcSecPass;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nvcSecDatas
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }
        if (isset($map['NvcSecBlock'])) {
            $model->nvcSecBlock = $map['NvcSecBlock'];
        }
        if (isset($map['NvcSecPass'])) {
            $model->nvcSecPass = $map['NvcSecPass'];
        }

        return $model;
    }
}
