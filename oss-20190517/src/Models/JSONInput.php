<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class JSONInput extends Model
{
    /**
     * @var bool
     */
    public $parseJsonNumberAsString;

    /**
     * @var string
     */
    public $range;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'parseJsonNumberAsString' => 'ParseJsonNumberAsString',
        'range'                   => 'Range',
        'type'                    => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->parseJsonNumberAsString) {
            $res['ParseJsonNumberAsString'] = $this->parseJsonNumberAsString;
        }
        if (null !== $this->range) {
            $res['Range'] = $this->range;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return JSONInput
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ParseJsonNumberAsString'])) {
            $model->parseJsonNumberAsString = $map['ParseJsonNumberAsString'];
        }
        if (isset($map['Range'])) {
            $model->range = $map['Range'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
