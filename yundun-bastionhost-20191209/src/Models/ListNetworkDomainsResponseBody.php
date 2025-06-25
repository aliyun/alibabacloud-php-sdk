<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListNetworkDomainsResponseBody\networkDomains;

class ListNetworkDomainsResponseBody extends Model
{
    /**
     * @var networkDomains[]
     */
    public $networkDomains;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'networkDomains' => 'NetworkDomains',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->networkDomains)) {
            Model::validateArray($this->networkDomains);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->networkDomains) {
            if (\is_array($this->networkDomains)) {
                $res['NetworkDomains'] = [];
                $n1 = 0;
                foreach ($this->networkDomains as $item1) {
                    $res['NetworkDomains'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['NetworkDomains'])) {
            if (!empty($map['NetworkDomains'])) {
                $model->networkDomains = [];
                $n1 = 0;
                foreach ($map['NetworkDomains'] as $item1) {
                    $model->networkDomains[$n1] = networkDomains::fromMap($item1);
                    ++$n1;
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
