<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20180528\Models\QueryEditingJobListResponseBody\jobList\job\editingInputs\editingInput;

use AlibabaCloud\Tea\Model;

class inputConfig extends Model
{
    /**
     * @var string
     */
    public $deinterlaceMethod;

    /**
     * @var string
     */
    public $isNormalSar;
    protected $_name = [
        'deinterlaceMethod' => 'DeinterlaceMethod',
        'isNormalSar'       => 'IsNormalSar',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deinterlaceMethod) {
            $res['DeinterlaceMethod'] = $this->deinterlaceMethod;
        }
        if (null !== $this->isNormalSar) {
            $res['IsNormalSar'] = $this->isNormalSar;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return inputConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeinterlaceMethod'])) {
            $model->deinterlaceMethod = $map['DeinterlaceMethod'];
        }
        if (isset($map['IsNormalSar'])) {
            $model->isNormalSar = $map['IsNormalSar'];
        }

        return $model;
    }
}
