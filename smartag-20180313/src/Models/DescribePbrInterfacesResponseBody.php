<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribePbrInterfacesResponseBody\pbrInterfaces;
use AlibabaCloud\Tea\Model;

class DescribePbrInterfacesResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var pbrInterfaces
     */
    public $pbrInterfaces;
    protected $_name = [
        'totalCount'    => 'TotalCount',
        'requestId'     => 'RequestId',
        'pbrInterfaces' => 'PbrInterfaces',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pbrInterfaces) {
            $res['PbrInterfaces'] = null !== $this->pbrInterfaces ? $this->pbrInterfaces->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePbrInterfacesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PbrInterfaces'])) {
            $model->pbrInterfaces = pbrInterfaces::fromMap($map['PbrInterfaces']);
        }

        return $model;
    }
}
