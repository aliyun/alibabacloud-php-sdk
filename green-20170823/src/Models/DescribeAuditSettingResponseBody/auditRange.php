<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models\DescribeAuditSettingResponseBody;

use AlibabaCloud\Tea\Model;

class auditRange extends Model
{
    /**
     * @var bool
     */
    public $block;

    /**
     * @var bool
     */
    public $pass;

    /**
     * @var bool
     */
    public $review;
    protected $_name = [
        'block'  => 'block',
        'pass'   => 'pass',
        'review' => 'review',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->block) {
            $res['block'] = $this->block;
        }
        if (null !== $this->pass) {
            $res['pass'] = $this->pass;
        }
        if (null !== $this->review) {
            $res['review'] = $this->review;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return auditRange
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['block'])) {
            $model->block = $map['block'];
        }
        if (isset($map['pass'])) {
            $model->pass = $map['pass'];
        }
        if (isset($map['review'])) {
            $model->review = $map['review'];
        }

        return $model;
    }
}
