<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\DescribeRenderingInstanceResponseBody;

use AlibabaCloud\Dara\Model;

class systemInfo extends Model
{
    /**
     * @var int
     */
    public $frequency;

    /**
     * @var string
     */
    public $resolution;
    protected $_name = [
        'frequency' => 'Frequency',
        'resolution' => 'Resolution',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->frequency) {
            $res['Frequency'] = $this->frequency;
        }

        if (null !== $this->resolution) {
            $res['Resolution'] = $this->resolution;
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
        if (isset($map['Frequency'])) {
            $model->frequency = $map['Frequency'];
        }

        if (isset($map['Resolution'])) {
            $model->resolution = $map['Resolution'];
        }

        return $model;
    }
}
