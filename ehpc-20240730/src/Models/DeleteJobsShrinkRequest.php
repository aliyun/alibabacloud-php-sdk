<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models;

use AlibabaCloud\Tea\Model;

class DeleteJobsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $jobSpecShrink;
    protected $_name = [
        'jobSpecShrink' => 'JobSpec',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobSpecShrink) {
            $res['JobSpec'] = $this->jobSpecShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteJobsShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobSpec'])) {
            $model->jobSpecShrink = $map['JobSpec'];
        }

        return $model;
    }
}
