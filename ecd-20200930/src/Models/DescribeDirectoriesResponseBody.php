<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDirectoriesResponseBody\directories;
use AlibabaCloud\Tea\Model;

class DescribeDirectoriesResponseBody extends Model
{
    /**
     * @var string
     */
    public $adHostname;

    /**
     * @var directories[]
     */
    public $directories;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'adHostname'  => 'AdHostname',
        'directories' => 'Directories',
        'nextToken'   => 'NextToken',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->adHostname) {
            $res['AdHostname'] = $this->adHostname;
        }
        if (null !== $this->directories) {
            $res['Directories'] = [];
            if (null !== $this->directories && \is_array($this->directories)) {
                $n = 0;
                foreach ($this->directories as $item) {
                    $res['Directories'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeDirectoriesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdHostname'])) {
            $model->adHostname = $map['AdHostname'];
        }
        if (isset($map['Directories'])) {
            if (!empty($map['Directories'])) {
                $model->directories = [];
                $n                  = 0;
                foreach ($map['Directories'] as $item) {
                    $model->directories[$n++] = null !== $item ? directories::fromMap($item) : $item;
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
