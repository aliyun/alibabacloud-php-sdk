<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NBF\V20211110_21312586\Models;

use AlibabaCloud\Tea\Model;

class BuildSdkRequest extends Model
{
    /**
     * @var string
     */
    public $buildCmd;
    protected $_name = [
        'buildCmd' => 'buildCmd',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->buildCmd) {
            $res['buildCmd'] = $this->buildCmd;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BuildSdkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['buildCmd'])) {
            $model->buildCmd = $map['buildCmd'];
        }

        return $model;
    }
}
