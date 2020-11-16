<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20201002\Models;

use AlibabaCloud\SDK\Ecd\V20201002\Models\DescribeDirectoriesResponse\directories;
use AlibabaCloud\Tea\Model;

class DescribeDirectoriesResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var directories[]
     */
    public $directories;
    protected $_name = [
        'requestId'   => 'RequestId',
        'directories' => 'Directories',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('directories', $this->directories, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDirectoriesResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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

        return $model;
    }
}
