<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeCompactionServiceSwitchResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var bool
     */
    public $enableCompactionService;
    protected $_name = [
        'enableCompactionService' => 'EnableCompactionService',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enableCompactionService) {
            $res['EnableCompactionService'] = $this->enableCompactionService;
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
        if (isset($map['EnableCompactionService'])) {
            $model->enableCompactionService = $map['EnableCompactionService'];
        }

        return $model;
    }
}
