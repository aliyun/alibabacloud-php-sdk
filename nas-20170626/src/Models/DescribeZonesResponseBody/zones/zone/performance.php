<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeZonesResponseBody\zones\zone;

use AlibabaCloud\Dara\Model;

class performance extends Model
{
    /**
     * @var string[]
     */
    public $protocol;
    protected $_name = [
        'protocol' => 'Protocol',
    ];

    public function validate()
    {
        if (\is_array($this->protocol)) {
            Model::validateArray($this->protocol);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->protocol) {
            if (\is_array($this->protocol)) {
                $res['Protocol'] = [];
                $n1              = 0;
                foreach ($this->protocol as $item1) {
                    $res['Protocol'][$n1++] = $item1;
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
        if (isset($map['Protocol'])) {
            if (!empty($map['Protocol'])) {
                $model->protocol = [];
                $n1              = 0;
                foreach ($map['Protocol'] as $item1) {
                    $model->protocol[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
