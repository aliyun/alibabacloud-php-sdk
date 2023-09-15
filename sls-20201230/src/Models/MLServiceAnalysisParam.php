<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class MLServiceAnalysisParam extends Model
{
    /**
     * @var string[][]
     */
    public $input;

    /**
     * @var string[]
     */
    public $parameter;
    protected $_name = [
        'input'     => 'input',
        'parameter' => 'parameter',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->input) {
            $res['input'] = $this->input;
        }
        if (null !== $this->parameter) {
            $res['parameter'] = $this->parameter;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MLServiceAnalysisParam
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['input'])) {
            if (!empty($map['input'])) {
                $model->input = $map['input'];
            }
        }
        if (isset($map['parameter'])) {
            $model->parameter = $map['parameter'];
        }

        return $model;
    }
}
