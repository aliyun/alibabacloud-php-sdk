<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Viapioxscross\V20200701\Models\LingJieOpenStatus;

use AlibabaCloud\Tea\Model;

class commoditiesOpenStatus extends Model
{
    /**
     * @var string
     */
    public $cnName;

    /**
     * @var string
     */
    public $commodity;

    /**
     * @var string
     */
    public $describe;

    /**
     * @var string
     */
    public $detailPage;

    /**
     * @var bool
     */
    public $open;

    /**
     * @var string
     */
    public $openTime;
    protected $_name = [
        'cnName'     => 'CnName',
        'commodity'  => 'Commodity',
        'describe'   => 'Describe',
        'detailPage' => 'DetailPage',
        'open'       => 'Open',
        'openTime'   => 'OpenTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cnName) {
            $res['CnName'] = $this->cnName;
        }
        if (null !== $this->commodity) {
            $res['Commodity'] = $this->commodity;
        }
        if (null !== $this->describe) {
            $res['Describe'] = $this->describe;
        }
        if (null !== $this->detailPage) {
            $res['DetailPage'] = $this->detailPage;
        }
        if (null !== $this->open) {
            $res['Open'] = $this->open;
        }
        if (null !== $this->openTime) {
            $res['OpenTime'] = $this->openTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return commoditiesOpenStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CnName'])) {
            $model->cnName = $map['CnName'];
        }
        if (isset($map['Commodity'])) {
            $model->commodity = $map['Commodity'];
        }
        if (isset($map['Describe'])) {
            $model->describe = $map['Describe'];
        }
        if (isset($map['DetailPage'])) {
            $model->detailPage = $map['DetailPage'];
        }
        if (isset($map['Open'])) {
            $model->open = $map['Open'];
        }
        if (isset($map['OpenTime'])) {
            $model->openTime = $map['OpenTime'];
        }

        return $model;
    }
}
