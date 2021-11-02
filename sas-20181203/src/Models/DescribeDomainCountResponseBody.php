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
    public $rootDomainsCount;

    /**
     * @var int
     */
    public $subDomainsCount;

    /**
     * @var int
     */
    public $totalDomainsCount;
    protected $_name = [
        'requestId'         => 'RequestId',
        'rootDomainsCount'  => 'RootDomainsCount',
        'subDomainsCount'   => 'SubDomainsCount',
        'totalDomainsCount' => 'TotalDomainsCount',
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
        if (null !== $this->rootDomainsCount) {
            $res['RootDomainsCount'] = $this->rootDomainsCount;
        }
        if (null !== $this->subDomainsCount) {
            $res['SubDomainsCount'] = $this->subDomainsCount;
        }
        if (null !== $this->totalDomainsCount) {
            $res['TotalDomainsCount'] = $this->totalDomainsCount;
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
        if (isset($map['RootDomainsCount'])) {
            $model->rootDomainsCount = $map['RootDomainsCount'];
        }
        if (isset($map['SubDomainsCount'])) {
            $model->subDomainsCount = $map['SubDomainsCount'];
        }
        if (isset($map['TotalDomainsCount'])) {
            $model->totalDomainsCount = $map['TotalDomainsCount'];
        }

        return $model;
    }
}
