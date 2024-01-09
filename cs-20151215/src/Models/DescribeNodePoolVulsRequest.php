<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class DescribeNodePoolVulsRequest extends Model
{
    /**
     * @description The priority to fix the vulnerability. Separate multiple priorities with commas (,). Valid values:
     *
     *   `asap`: high
     *   `later`: medium
     *   `nntf`: low
     *
     * @example asap
     *
     * @var string
     */
    public $necessity;
    protected $_name = [
        'necessity' => 'necessity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->necessity) {
            $res['necessity'] = $this->necessity;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeNodePoolVulsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['necessity'])) {
            $model->necessity = $map['necessity'];
        }

        return $model;
    }
}
