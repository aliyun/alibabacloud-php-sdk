<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDomainsResponseBody\domains;

class DescribeDomainsResponseBody extends Model
{
    /**
     * @var domains[]
     */
    public $domains;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'domains' => 'Domains',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->domains)) {
            Model::validateArray($this->domains);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domains) {
            if (\is_array($this->domains)) {
                $res['Domains'] = [];
                $n1 = 0;
                foreach ($this->domains as $item1) {
                    $res['Domains'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['Domains'])) {
            if (!empty($map['Domains'])) {
                $model->domains = [];
                $n1 = 0;
                foreach ($map['Domains'] as $item1) {
                    $model->domains[$n1++] = domains::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
