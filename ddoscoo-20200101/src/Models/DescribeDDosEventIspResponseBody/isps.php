<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDDosEventIspResponseBody;

use AlibabaCloud\Tea\Model;

class isps extends Model
{
    /**
     * @var int
     */
    public $inPkts;

    /**
     * @var string
     */
    public $isp;
    protected $_name = [
        'inPkts' => 'InPkts',
        'isp'    => 'Isp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->inPkts) {
            $res['InPkts'] = $this->inPkts;
        }
        if (null !== $this->isp) {
            $res['Isp'] = $this->isp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return isps
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InPkts'])) {
            $model->inPkts = $map['InPkts'];
        }
        if (isset($map['Isp'])) {
            $model->isp = $map['Isp'];
        }

        return $model;
    }
}
