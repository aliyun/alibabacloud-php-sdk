<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeDRMCertListResponseBody\DRMCertInfoListList;
use AlibabaCloud\Tea\Model;

class DescribeDRMCertListResponseBody extends Model
{
    /**
     * @var DRMCertInfoListList
     */
    public $DRMCertInfoListList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'DRMCertInfoListList' => 'DRMCertInfoListList',
        'requestId'           => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DRMCertInfoListList) {
            $res['DRMCertInfoListList'] = null !== $this->DRMCertInfoListList ? $this->DRMCertInfoListList->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDRMCertListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DRMCertInfoListList'])) {
            $model->DRMCertInfoListList = DRMCertInfoListList::fromMap($map['DRMCertInfoListList']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
