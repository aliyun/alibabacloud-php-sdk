<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDataArchiveOrderRequest\param;

use AlibabaCloud\Tea\Model;

class variables extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $pattern;
    protected $_name = [
        'name'    => 'Name',
        'pattern' => 'Pattern',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->pattern) {
            $res['Pattern'] = $this->pattern;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return variables
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Pattern'])) {
            $model->pattern = $map['Pattern'];
        }

        return $model;
    }
}
