<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models\AlgorithmSpec;

use AlibabaCloud\Tea\Model;

class customization extends Model
{
    /**
     * @var bool
     */
    public $codeDir;
    protected $_name = [
        'codeDir' => 'CodeDir',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->codeDir) {
            $res['CodeDir'] = $this->codeDir;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return customization
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CodeDir'])) {
            $model->codeDir = $map['CodeDir'];
        }

        return $model;
    }
}
