<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class DescribeDifyEditionsRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $dataRegion;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'dataRegion' => 'DataRegion',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->dataRegion) {
            $res['DataRegion'] = $this->dataRegion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDifyEditionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DataRegion'])) {
            $model->dataRegion = $map['DataRegion'];
        }

        return $model;
    }
}
