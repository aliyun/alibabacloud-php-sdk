<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailcloud\V20180313\Models\ListDeployConfigResponseBody\data;

use AlibabaCloud\Tea\Model;

class containerCodePath extends Model
{
    /**
     * @var string
     */
    public $codePath;
    protected $_name = [
        'codePath' => 'CodePath',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->codePath) {
            $res['CodePath'] = $this->codePath;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return containerCodePath
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CodePath'])) {
            $model->codePath = $map['CodePath'];
        }

        return $model;
    }
}
