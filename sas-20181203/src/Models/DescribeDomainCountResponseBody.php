<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

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
        'requestId' => 'RequestId',
        'rootDomainsCount' => 'RootDomainsCount',
        'subDomainsCount' => 'SubDomainsCount',
        'totalDomainsCount' => 'TotalDomainsCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
