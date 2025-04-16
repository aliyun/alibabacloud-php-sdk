<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20201001\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20201001\Models\DescribeDirectoriesResponseBody\directories;

class DescribeDirectoriesResponseBody extends Model
{
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
        'directories' => 'Directories',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->directories)) {
            Model::validateArray($this->directories);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->directories) {
            if (\is_array($this->directories)) {
                $res['Directories'] = [];
                $n1 = 0;
                foreach ($this->directories as $item1) {
                    $res['Directories'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Directories'])) {
            if (!empty($map['Directories'])) {
                $model->directories = [];
                $n1 = 0;
                foreach ($map['Directories'] as $item1) {
                    $model->directories[$n1++] = directories::fromMap($item1);
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
