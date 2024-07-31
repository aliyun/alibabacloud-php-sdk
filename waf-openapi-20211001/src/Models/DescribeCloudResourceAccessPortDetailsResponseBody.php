<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeCloudResourceAccessPortDetailsResponseBody\accessPortDetails;
use AlibabaCloud\Tea\Model;

class DescribeCloudResourceAccessPortDetailsResponseBody extends Model
{
    /**
     * @var accessPortDetails[]
     */
    public $accessPortDetails;

    /**
     * @example 2EFCFE18-78F8-5079-B312-07***48B
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 10
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'accessPortDetails' => 'AccessPortDetails',
        'requestId'         => 'RequestId',
        'totalCount'        => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessPortDetails) {
            $res['AccessPortDetails'] = [];
            if (null !== $this->accessPortDetails && \is_array($this->accessPortDetails)) {
                $n = 0;
                foreach ($this->accessPortDetails as $item) {
                    $res['AccessPortDetails'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return DescribeCloudResourceAccessPortDetailsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessPortDetails'])) {
            if (!empty($map['AccessPortDetails'])) {
                $model->accessPortDetails = [];
                $n                        = 0;
                foreach ($map['AccessPortDetails'] as $item) {
                    $model->accessPortDetails[$n++] = null !== $item ? accessPortDetails::fromMap($item) : $item;
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
