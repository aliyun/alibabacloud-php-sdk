<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeCloudGtmSystemLinesResponseBody;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeCloudGtmSystemLinesResponseBody\systemLines\systemLine;
use AlibabaCloud\Tea\Model;

class systemLines extends Model
{
    /**
     * @var systemLine[]
     */
    public $systemLine;
    protected $_name = [
        'systemLine' => 'SystemLine',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->systemLine) {
            $res['SystemLine'] = [];
            if (null !== $this->systemLine && \is_array($this->systemLine)) {
                $n = 0;
                foreach ($this->systemLine as $item) {
                    $res['SystemLine'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return systemLines
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SystemLine'])) {
            if (!empty($map['SystemLine'])) {
                $model->systemLine = [];
                $n                 = 0;
                foreach ($map['SystemLine'] as $item) {
                    $model->systemLine[$n++] = null !== $item ? systemLine::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
