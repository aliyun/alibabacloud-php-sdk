<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainPvDataResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainPvDataResponseBody\pvDataInterval\pvDataInterval;

class pvDataInterval extends Model
{
    /**
     * @var pvDataInterval[]
     */
    public $pvDataInterval;
    protected $_name = [
        'pvDataInterval' => 'PvDataInterval',
    ];

    public function validate()
    {
        if (\is_array($this->pvDataInterval)) {
            Model::validateArray($this->pvDataInterval);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pvDataInterval) {
            if (\is_array($this->pvDataInterval)) {
                $res['PvDataInterval'] = [];
                $n1 = 0;
                foreach ($this->pvDataInterval as $item1) {
                    $res['PvDataInterval'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['PvDataInterval'])) {
            if (!empty($map['PvDataInterval'])) {
                $model->pvDataInterval = [];
                $n1 = 0;
                foreach ($map['PvDataInterval'] as $item1) {
                    $model->pvDataInterval[$n1] = self::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
