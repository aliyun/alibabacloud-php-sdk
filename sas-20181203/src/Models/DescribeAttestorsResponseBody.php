<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAttestorsResponseBody\attestors;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAttestorsResponseBody\pageInfo;

class DescribeAttestorsResponseBody extends Model
{
    /**
     * @var attestors[]
     */
    public $attestors;
    /**
     * @var pageInfo
     */
    public $pageInfo;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'attestors' => 'Attestors',
        'pageInfo'  => 'PageInfo',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->attestors)) {
            Model::validateArray($this->attestors);
        }
        if (null !== $this->pageInfo) {
            $this->pageInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attestors) {
            if (\is_array($this->attestors)) {
                $res['Attestors'] = [];
                $n1               = 0;
                foreach ($this->attestors as $item1) {
                    $res['Attestors'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toArray($noStream) : $this->pageInfo;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Attestors'])) {
            if (!empty($map['Attestors'])) {
                $model->attestors = [];
                $n1               = 0;
                foreach ($map['Attestors'] as $item1) {
                    $model->attestors[$n1++] = attestors::fromMap($item1);
                }
            }
        }

        if (isset($map['PageInfo'])) {
            $model->pageInfo = pageInfo::fromMap($map['PageInfo']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
