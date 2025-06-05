<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeDataCachesResponseBody\dataCaches;

use AlibabaCloud\Dara\Model;

class dataSource extends Model
{
    /**
     * @var string
     */
    public $options;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'options' => 'Options',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->options) {
            $res['Options'] = $this->options;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Options'])) {
            $model->options = $map['Options'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
