<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class ExternalStore extends Model
{
    /**
     * @var string
     */
    public $externalStoreName;

    /**
     * @var mixed[]
     */
    public $parameter;

    /**
     * @var string
     */
    public $storeType;
    protected $_name = [
        'externalStoreName' => 'externalStoreName',
        'parameter'         => 'parameter',
        'storeType'         => 'storeType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->externalStoreName) {
            $res['externalStoreName'] = $this->externalStoreName;
        }
        if (null !== $this->parameter) {
            $res['parameter'] = $this->parameter;
        }
        if (null !== $this->storeType) {
            $res['storeType'] = $this->storeType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExternalStore
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['externalStoreName'])) {
            $model->externalStoreName = $map['externalStoreName'];
        }
        if (isset($map['parameter'])) {
            $model->parameter = $map['parameter'];
        }
        if (isset($map['storeType'])) {
            $model->storeType = $map['storeType'];
        }

        return $model;
    }
}
