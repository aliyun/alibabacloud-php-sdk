<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20170115\Models\DescribeClusterWhiteListResponseBody;

use AlibabaCloud\Dara\Model;

class groupItems extends Model
{
    /**
     * @var string[]
     */
    public $whiteIp;
    protected $_name = [
        'whiteIp' => 'WhiteIp',
    ];

    public function validate()
    {
        if (\is_array($this->whiteIp)) {
            Model::validateArray($this->whiteIp);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->whiteIp) {
            if (\is_array($this->whiteIp)) {
                $res['WhiteIp'] = [];
                $n1 = 0;
                foreach ($this->whiteIp as $item1) {
                    $res['WhiteIp'][$n1] = $item1;
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
        if (isset($map['WhiteIp'])) {
            if (!empty($map['WhiteIp'])) {
                $model->whiteIp = [];
                $n1 = 0;
                foreach ($map['WhiteIp'] as $item1) {
                    $model->whiteIp[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
