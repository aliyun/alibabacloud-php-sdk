<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Afs\V20180112\Models\DescribeAfsVerifySigDataResponseBody;

use AlibabaCloud\Tea\Model;

class icSecVerifyDatas extends Model
{
    /**
     * @var int
     */
    public $icSecBlock;

    /**
     * @var string
     */
    public $time;

    /**
     * @var int
     */
    public $icSecPass;
    protected $_name = [
        'icSecBlock' => 'IcSecBlock',
        'time'       => 'Time',
        'icSecPass'  => 'IcSecPass',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->icSecBlock) {
            $res['IcSecBlock'] = $this->icSecBlock;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }
        if (null !== $this->icSecPass) {
            $res['IcSecPass'] = $this->icSecPass;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return icSecVerifyDatas
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IcSecBlock'])) {
            $model->icSecBlock = $map['IcSecBlock'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }
        if (isset($map['IcSecPass'])) {
            $model->icSecPass = $map['IcSecPass'];
        }

        return $model;
    }
}
