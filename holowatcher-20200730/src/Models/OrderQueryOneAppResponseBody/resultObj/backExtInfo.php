<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models\OrderQueryOneAppResponseBody\resultObj;

use AlibabaCloud\Tea\Model;

class backExtInfo extends Model
{
    /**
     * @var mixed[]
     */
    public $backInfoMap;
    protected $_name = [
        'backInfoMap' => 'BackInfoMap',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backInfoMap) {
            $res['BackInfoMap'] = $this->backInfoMap;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return backExtInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackInfoMap'])) {
            $model->backInfoMap = $map['BackInfoMap'];
        }

        return $model;
    }
}
