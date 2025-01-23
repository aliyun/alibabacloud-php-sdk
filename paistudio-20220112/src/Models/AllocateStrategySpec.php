<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Dara\Model;

class AllocateStrategySpec extends Model
{
    /**
     * @var NodeSpec[]
     */
    public $nodeSpecs;
    protected $_name = [
        'nodeSpecs' => 'NodeSpecs',
    ];

    public function validate()
    {
        if (\is_array($this->nodeSpecs)) {
            Model::validateArray($this->nodeSpecs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nodeSpecs) {
            if (\is_array($this->nodeSpecs)) {
                $res['NodeSpecs'] = [];
                $n1               = 0;
                foreach ($this->nodeSpecs as $item1) {
                    $res['NodeSpecs'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['NodeSpecs'])) {
            if (!empty($map['NodeSpecs'])) {
                $model->nodeSpecs = [];
                $n1               = 0;
                foreach ($map['NodeSpecs'] as $item1) {
                    $model->nodeSpecs[$n1++] = NodeSpec::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
