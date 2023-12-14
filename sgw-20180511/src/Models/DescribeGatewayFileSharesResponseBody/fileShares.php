<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeGatewayFileSharesResponseBody;

use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeGatewayFileSharesResponseBody\fileShares\fileShare;
use AlibabaCloud\Tea\Model;

class fileShares extends Model
{
    /**
     * @var fileShare[]
     */
    public $fileShare;
    protected $_name = [
        'fileShare' => 'FileShare',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileShare) {
            $res['FileShare'] = [];
            if (null !== $this->fileShare && \is_array($this->fileShare)) {
                $n = 0;
                foreach ($this->fileShare as $item) {
                    $res['FileShare'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fileShares
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileShare'])) {
            if (!empty($map['FileShare'])) {
                $model->fileShare = [];
                $n                = 0;
                foreach ($map['FileShare'] as $item) {
                    $model->fileShare[$n++] = null !== $item ? fileShare::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
