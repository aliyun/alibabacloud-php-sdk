<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiops\V20200806\Models;

use AlibabaCloud\Tea\Model;

class CloseEventRequest extends Model
{
    /**
     * @var string
     */
    public $closeDesc;

    /**
     * @var string
     */
    public $id;
    protected $_name = [
        'closeDesc' => 'CloseDesc',
        'id'        => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->closeDesc) {
            $res['CloseDesc'] = $this->closeDesc;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CloseEventRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CloseDesc'])) {
            $model->closeDesc = $map['CloseDesc'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
