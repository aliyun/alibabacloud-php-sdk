<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListProjectsResponseBody\data\projects\securityProperties;

use AlibabaCloud\Dara\Model;

class projectProtection extends Model
{
    /**
     * @var string
     */
    public $exceptionPolicy;

    /**
     * @var bool
     */
    public $protected;
    protected $_name = [
        'exceptionPolicy' => 'exceptionPolicy',
        'protected' => 'protected',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->exceptionPolicy) {
            $res['exceptionPolicy'] = $this->exceptionPolicy;
        }

        if (null !== $this->protected) {
            $res['protected'] = $this->protected;
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
        if (isset($map['exceptionPolicy'])) {
            $model->exceptionPolicy = $map['exceptionPolicy'];
        }

        if (isset($map['protected'])) {
            $model->protected = $map['protected'];
        }

        return $model;
    }
}
