<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeDomainCountResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalDomainsCount;

    /**
     * @var int
     */
    public $rootDomainsCount;
    protected $_name = [
        'requestId'         => 'RequestId',
        'totalDomainsCount' => 'TotalDomainsCount',
        'rootDomainsCount'  => 'RootDomainsCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalDomainsCount) {
            $res['TotalDomainsCount'] = $this->totalDomainsCount;
        }
        if (null !== $this->rootDomainsCount) {
            $res['RootDomainsCount'] = $this->rootDomainsCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDomainCountResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalDomainsCount'])) {
            $model->totalDomainsCount = $map['TotalDomainsCount'];
        }
        if (isset($map['RootDomainsCount'])) {
            $model->rootDomainsCount = $map['RootDomainsCount'];
        }

        return $model;
    }
}
