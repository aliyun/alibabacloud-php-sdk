<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainUvDataResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainUvDataResponseBody\uvDataInterval\uvDataInterval;

class uvDataInterval extends Model
{
    /**
     * @var uvDataInterval[]
     */
    public $uvDataInterval;
    protected $_name = [
        'uvDataInterval' => 'UvDataInterval',
    ];

    public function validate()
    {
        if (\is_array($this->uvDataInterval)) {
            Model::validateArray($this->uvDataInterval);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->uvDataInterval) {
            if (\is_array($this->uvDataInterval)) {
                $res['UvDataInterval'] = [];
                $n1 = 0;
                foreach ($this->uvDataInterval as $item1) {
                    $res['UvDataInterval'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['UvDataInterval'])) {
            if (!empty($map['UvDataInterval'])) {
                $model->uvDataInterval = [];
                $n1 = 0;
                foreach ($map['UvDataInterval'] as $item1) {
                    $model->uvDataInterval[$n1] = self::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
