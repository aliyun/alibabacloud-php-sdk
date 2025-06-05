<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeAvailableResourceRequest;

use AlibabaCloud\Dara\Model;

class destinationResource extends Model
{
    /**
     * @var string
     */
    public $category;

    /**
     * @var float
     */
    public $cores;

    /**
     * @var float
     */
    public $memory;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'category' => 'Category',
        'cores' => 'Cores',
        'memory' => 'Memory',
        'value' => 'Value',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }

        if (null !== $this->cores) {
            $res['Cores'] = $this->cores;
        }

        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }

        if (null !== $this->value) {
            $res['Value'] = $this->value;
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
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

        if (isset($map['Cores'])) {
            $model->cores = $map['Cores'];
        }

        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }

        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
