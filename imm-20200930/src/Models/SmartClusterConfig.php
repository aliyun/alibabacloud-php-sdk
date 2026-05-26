<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

class SmartClusterConfig extends Model
{
    /**
     * @var FigureClusterConfig
     */
    public $figure;
    protected $_name = [
        'figure' => 'Figure',
    ];

    public function validate()
    {
        if (null !== $this->figure) {
            $this->figure->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->figure) {
            $res['Figure'] = null !== $this->figure ? $this->figure->toArray($noStream) : $this->figure;
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
        if (isset($map['Figure'])) {
            $model->figure = FigureClusterConfig::fromMap($map['Figure']);
        }

        return $model;
    }
}
