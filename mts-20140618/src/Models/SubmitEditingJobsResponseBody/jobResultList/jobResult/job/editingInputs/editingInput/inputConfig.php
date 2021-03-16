<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\SubmitEditingJobsResponseBody\jobResultList\jobResult\job\editingInputs\editingInput;

use AlibabaCloud\Tea\Model;

class inputConfig extends Model
{
    /**
     * @var string
     */
    public $isNormalSar;

    /**
     * @var string
     */
    public $deinterlaceMethod;
    protected $_name = [
        'isNormalSar'       => 'IsNormalSar',
        'deinterlaceMethod' => 'DeinterlaceMethod',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isNormalSar) {
            $res['IsNormalSar'] = $this->isNormalSar;
        }
        if (null !== $this->deinterlaceMethod) {
            $res['DeinterlaceMethod'] = $this->deinterlaceMethod;
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
        if (isset($map['IsNormalSar'])) {
            $model->isNormalSar = $map['IsNormalSar'];
        }
        if (isset($map['DeinterlaceMethod'])) {
            $model->deinterlaceMethod = $map['DeinterlaceMethod'];
        }

        return $model;
    }
}
