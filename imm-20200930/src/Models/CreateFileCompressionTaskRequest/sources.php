<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models\CreateFileCompressionTaskRequest;

use AlibabaCloud\Dara\Model;

class sources extends Model
{
    /**
     * @var string
     */
    public $alias;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var string
     */
    public $URI;
    protected $_name = [
        'alias' => 'Alias',
        'mode' => 'Mode',
        'URI' => 'URI',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alias) {
            $res['Alias'] = $this->alias;
        }

        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }

        if (null !== $this->URI) {
            $res['URI'] = $this->URI;
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
        if (isset($map['Alias'])) {
            $model->alias = $map['Alias'];
        }

        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }

        if (isset($map['URI'])) {
            $model->URI = $map['URI'];
        }

        return $model;
    }
}
