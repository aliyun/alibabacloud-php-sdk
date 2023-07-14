<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\CreateSyntheticTaskRequest\commonParam;

use AlibabaCloud\Tea\Model;

class alertList extends Model
{
    /**
     * @example true
     *
     * @var int
     */
    public $isCritical;

    /**
     * @example PING_SET
     *
     * @var string
     */
    public $name;

    /**
     * @example 1
     *
     * @var int
     */
    public $symbols;
    protected $_name = [
        'isCritical' => 'IsCritical',
        'name'       => 'Name',
        'symbols'    => 'Symbols',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isCritical) {
            $res['IsCritical'] = $this->isCritical;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->symbols) {
            $res['Symbols'] = $this->symbols;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return alertList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsCritical'])) {
            $model->isCritical = $map['IsCritical'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Symbols'])) {
            $model->symbols = $map['Symbols'];
        }

        return $model;
    }
}
