<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\GetBodyPersonResponseBody\data;

use AlibabaCloud\Tea\Model;

class traceList extends Model
{
    /**
     * @description TraceId
     *
     * @var int
     */
    public $id;

    /**
     * @description 自定义Trace信息
     *
     * @var string
     */
    public $extraData;
    protected $_name = [
        'id'        => 'Id',
        'extraData' => 'ExtraData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->extraData) {
            $res['ExtraData'] = $this->extraData;
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ExtraData'])) {
            $model->extraData = $map['ExtraData'];
        }

        return $model;
    }
}
