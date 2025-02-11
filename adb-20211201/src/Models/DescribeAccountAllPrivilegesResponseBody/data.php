<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeAccountAllPrivilegesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeAccountAllPrivilegesResponseBody\data\result;

class data extends Model
{
    /**
     * @var string
     */
    public $marker;
    /**
     * @var result[]
     */
    public $result;
    /**
     * @var bool
     */
    public $truncated;
    protected $_name = [
        'marker'    => 'Marker',
        'result'    => 'Result',
        'truncated' => 'Truncated',
    ];

    public function validate()
    {
        if (\is_array($this->result)) {
            Model::validateArray($this->result);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->marker) {
            $res['Marker'] = $this->marker;
        }

        if (null !== $this->result) {
            if (\is_array($this->result)) {
                $res['Result'] = [];
                $n1            = 0;
                foreach ($this->result as $item1) {
                    $res['Result'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->truncated) {
            $res['Truncated'] = $this->truncated;
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
        if (isset($map['Marker'])) {
            $model->marker = $map['Marker'];
        }

        if (isset($map['Result'])) {
            if (!empty($map['Result'])) {
                $model->result = [];
                $n1            = 0;
                foreach ($map['Result'] as $item1) {
                    $model->result[$n1++] = result::fromMap($item1);
                }
            }
        }

        if (isset($map['Truncated'])) {
            $model->truncated = $map['Truncated'];
        }

        return $model;
    }
}
