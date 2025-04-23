<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeCloudGtmSystemLinesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeCloudGtmSystemLinesResponseBody\systemLines\systemLine;

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
        if (\is_array($this->systemLine)) {
            Model::validateArray($this->systemLine);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->systemLine) {
            if (\is_array($this->systemLine)) {
                $res['SystemLine'] = [];
                $n1 = 0;
                foreach ($this->systemLine as $item1) {
                    $res['SystemLine'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SystemLine'])) {
            if (!empty($map['SystemLine'])) {
                $model->systemLine = [];
                $n1 = 0;
                foreach ($map['SystemLine'] as $item1) {
                    $model->systemLine[$n1++] = systemLine::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
