<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\UpdatePrivateAccessApplicationL7SwitchRequest;

use AlibabaCloud\Dara\Model;

class urlAccessPaths extends Model
{
    /**
     * @var string[]
     */
    public $allowMethods;

    /**
     * @var string[]
     */
    public $urls;
    protected $_name = [
        'allowMethods' => 'AllowMethods',
        'urls' => 'Urls',
    ];

    public function validate()
    {
        if (\is_array($this->allowMethods)) {
            Model::validateArray($this->allowMethods);
        }
        if (\is_array($this->urls)) {
            Model::validateArray($this->urls);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowMethods) {
            if (\is_array($this->allowMethods)) {
                $res['AllowMethods'] = [];
                $n1 = 0;
                foreach ($this->allowMethods as $item1) {
                    $res['AllowMethods'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->urls) {
            if (\is_array($this->urls)) {
                $res['Urls'] = [];
                $n1 = 0;
                foreach ($this->urls as $item1) {
                    $res['Urls'][$n1] = $item1;
                    ++$n1;
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
        if (isset($map['AllowMethods'])) {
            if (!empty($map['AllowMethods'])) {
                $model->allowMethods = [];
                $n1 = 0;
                foreach ($map['AllowMethods'] as $item1) {
                    $model->allowMethods[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Urls'])) {
            if (!empty($map['Urls'])) {
                $model->urls = [];
                $n1 = 0;
                foreach ($map['Urls'] as $item1) {
                    $model->urls[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
