<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\GetRealPersonVerificationResultResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var bool
     */
    public $passed;
    protected $_name = [
        'passed' => 'Passed',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->passed) {
            $res['Passed'] = $this->passed;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Passed'])) {
            $model->passed = $map['Passed'];
        }

        return $model;
    }
}
