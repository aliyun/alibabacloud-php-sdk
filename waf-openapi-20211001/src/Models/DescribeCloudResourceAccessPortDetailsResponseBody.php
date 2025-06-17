<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeCloudResourceAccessPortDetailsResponseBody\accessPortDetails;

class DescribeCloudResourceAccessPortDetailsResponseBody extends Model
{
    /**
     * @var accessPortDetails[]
     */
    public $accessPortDetails;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'accessPortDetails' => 'AccessPortDetails',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->accessPortDetails)) {
            Model::validateArray($this->accessPortDetails);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessPortDetails) {
            if (\is_array($this->accessPortDetails)) {
                $res['AccessPortDetails'] = [];
                $n1 = 0;
                foreach ($this->accessPortDetails as $item1) {
                    $res['AccessPortDetails'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AccessPortDetails'])) {
            if (!empty($map['AccessPortDetails'])) {
                $model->accessPortDetails = [];
                $n1 = 0;
                foreach ($map['AccessPortDetails'] as $item1) {
                    $model->accessPortDetails[$n1] = accessPortDetails::fromMap($item1);
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
