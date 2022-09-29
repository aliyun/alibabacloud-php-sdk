<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\GetBodyPersonResponseBody\data;

use AlibabaCloud\Tea\Model;

class traceList extends Model
{
    /**
     * @var string
     */
    public $extraData;

    /**
     * @var int
     */
    public $id;
    protected $_name = [
        'extraData' => 'ExtraData',
        'id'        => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->extraData) {
            $res['ExtraData'] = $this->extraData;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return traceList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExtraData'])) {
            $model->extraData = $map['ExtraData'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
