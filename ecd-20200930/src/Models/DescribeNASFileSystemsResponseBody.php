<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeNASFileSystemsResponseBody\fileSystems;
use AlibabaCloud\Tea\Model;

class DescribeNASFileSystemsResponseBody extends Model
{
    /**
     * @var fileSystems[]
     */
    public $fileSystems;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'fileSystems' => 'FileSystems',
        'nextToken'   => 'NextToken',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileSystems) {
            $res['FileSystems'] = [];
            if (null !== $this->fileSystems && \is_array($this->fileSystems)) {
                $n = 0;
                foreach ($this->fileSystems as $item) {
                    $res['FileSystems'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeNASFileSystemsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileSystems'])) {
            if (!empty($map['FileSystems'])) {
                $model->fileSystems = [];
                $n                  = 0;
                foreach ($map['FileSystems'] as $item) {
                    $model->fileSystems[$n++] = null !== $item ? fileSystems::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
