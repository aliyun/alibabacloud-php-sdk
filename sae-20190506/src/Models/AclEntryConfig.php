<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class AclEntryConfig extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 1.2.3.4/32
     *
     * @var string
     */
    public $entry;
    protected $_name = [
        'entry' => 'entry',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->entry) {
            $res['entry'] = $this->entry;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AclEntryConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['entry'])) {
            $model->entry = $map['entry'];
        }

        return $model;
    }
}
