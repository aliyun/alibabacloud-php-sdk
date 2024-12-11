<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeCompactionServiceSwitchResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Indicates whether the remote build feature is enabled.
     *
     * Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $enableCompactionService;
    protected $_name = [
        'enableCompactionService' => 'EnableCompactionService',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableCompactionService) {
            $res['EnableCompactionService'] = $this->enableCompactionService;
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
        if (isset($map['EnableCompactionService'])) {
            $model->enableCompactionService = $map['EnableCompactionService'];
        }

        return $model;
    }
}
