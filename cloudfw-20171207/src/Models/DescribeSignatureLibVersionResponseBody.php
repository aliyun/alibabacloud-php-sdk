<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeSignatureLibVersionResponseBody\version;

class DescribeSignatureLibVersionResponseBody extends Model
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
     * @var version[]
     */
    public $version;
    protected $_name = [
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
        'version' => 'Version',
    ];

    public function validate()
    {
        if (\is_array($this->version)) {
            Model::validateArray($this->version);
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

        if (null !== $this->version) {
            if (\is_array($this->version)) {
                $res['Version'] = [];
                $n1 = 0;
                foreach ($this->version as $item1) {
                    $res['Version'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['Version'])) {
            if (!empty($map['Version'])) {
                $model->version = [];
                $n1 = 0;
                foreach ($map['Version'] as $item1) {
                    $model->version[$n1++] = version::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
