<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models\DescribeServiceInstanceDiagnosisResponseBody;

use AlibabaCloud\Tea\Model;

class diagnosis extends Model
{
    /**
     * @var string[]
     */
    public $advices;

    /**
     * @var string[]
     */
    public $causes;

    /**
     * @example Container worker0 failed to pull image.
     *
     * @var string
     */
    public $error;
    protected $_name = [
        'advices' => 'Advices',
        'causes'  => 'Causes',
        'error'   => 'Error',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->advices) {
            $res['Advices'] = $this->advices;
        }
        if (null !== $this->causes) {
            $res['Causes'] = $this->causes;
        }
        if (null !== $this->error) {
            $res['Error'] = $this->error;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return diagnosis
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Advices'])) {
            if (!empty($map['Advices'])) {
                $model->advices = $map['Advices'];
            }
        }
        if (isset($map['Causes'])) {
            if (!empty($map['Causes'])) {
                $model->causes = $map['Causes'];
            }
        }
        if (isset($map['Error'])) {
            $model->error = $map['Error'];
        }

        return $model;
    }
}
