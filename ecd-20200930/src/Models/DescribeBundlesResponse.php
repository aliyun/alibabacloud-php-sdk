<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeBundlesResponse\bundles;
use AlibabaCloud\Tea\Model;

class DescribeBundlesResponse extends Model
{
    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bundles[]
     */
    public $bundles;
    protected $_name = [
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'bundles'   => 'Bundles',
    ];

    public function validate()
    {
        Model::validateRequired('nextToken', $this->nextToken, true);
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('bundles', $this->bundles, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->bundles) {
            $res['Bundles'] = [];
            if (null !== $this->bundles && \is_array($this->bundles)) {
                $n = 0;
                foreach ($this->bundles as $item) {
                    $res['Bundles'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeBundlesResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Bundles'])) {
            if (!empty($map['Bundles'])) {
                $model->bundles = [];
                $n              = 0;
                foreach ($map['Bundles'] as $item) {
                    $model->bundles[$n++] = null !== $item ? bundles::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
