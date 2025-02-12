<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDomainResourceResponseBody\webRules;

class DescribeDomainResourceResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var int
     */
    public $totalCount;
    /**
     * @var webRules[]
     */
    public $webRules;
    protected $_name = [
        'requestId'  => 'RequestId',
        'totalCount' => 'TotalCount',
        'webRules'   => 'WebRules',
    ];

    public function validate()
    {
        if (\is_array($this->webRules)) {
            Model::validateArray($this->webRules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        if (null !== $this->webRules) {
            if (\is_array($this->webRules)) {
                $res['WebRules'] = [];
                $n1              = 0;
                foreach ($this->webRules as $item1) {
                    $res['WebRules'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        if (isset($map['WebRules'])) {
            if (!empty($map['WebRules'])) {
                $model->webRules = [];
                $n1              = 0;
                foreach ($map['WebRules'] as $item1) {
                    $model->webRules[$n1++] = webRules::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
