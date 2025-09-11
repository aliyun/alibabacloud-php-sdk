<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\CreateRoutineCodeDeploymentResponseBody;

use AlibabaCloud\Dara\Model;

class codeVersions extends Model
{
    /**
     * @var string
     */
    public $codeVersion;

    /**
     * @var int
     */
    public $percentage;
    protected $_name = [
        'codeVersion' => 'CodeVersion',
        'percentage' => 'Percentage',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->codeVersion) {
            $res['CodeVersion'] = $this->codeVersion;
        }

        if (null !== $this->percentage) {
            $res['Percentage'] = $this->percentage;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CodeVersion'])) {
            $model->codeVersion = $map['CodeVersion'];
        }

        if (isset($map['Percentage'])) {
            $model->percentage = $map['Percentage'];
        }

        return $model;
    }
}
