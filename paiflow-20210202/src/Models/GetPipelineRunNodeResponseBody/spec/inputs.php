<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIFlow\V20210202\Models\GetPipelineRunNodeResponseBody\spec;

use AlibabaCloud\Tea\Model;

class inputs extends Model
{
    /**
     * @var mixed[][]
     */
    public $artifacts;

    /**
     * @var mixed[][]
     */
    public $parameters;
    protected $_name = [
        'artifacts'  => 'Artifacts',
        'parameters' => 'Parameters',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->artifacts) {
            $res['Artifacts'] = $this->artifacts;
        }
        if (null !== $this->parameters) {
            $res['Parameters'] = $this->parameters;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return inputs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Artifacts'])) {
            if (!empty($map['Artifacts'])) {
                $model->artifacts = $map['Artifacts'];
            }
        }
        if (isset($map['Parameters'])) {
            if (!empty($map['Parameters'])) {
                $model->parameters = $map['Parameters'];
            }
        }

        return $model;
    }
}
