<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ModelStudio\V20260210\Models\GetApiKeyResponseBody\apiKey\auth;

use AlibabaCloud\Dara\Model;

class modelAccessScope extends Model
{
    /**
     * @var string[]
     */
    public $accessibleModels;

    /**
     * @var bool
     */
    public $allowAllModels;
    protected $_name = [
        'accessibleModels' => 'accessibleModels',
        'allowAllModels' => 'allowAllModels',
    ];

    public function validate()
    {
        if (\is_array($this->accessibleModels)) {
            Model::validateArray($this->accessibleModels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessibleModels) {
            if (\is_array($this->accessibleModels)) {
                $res['accessibleModels'] = [];
                $n1 = 0;
                foreach ($this->accessibleModels as $item1) {
                    $res['accessibleModels'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->allowAllModels) {
            $res['allowAllModels'] = $this->allowAllModels;
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
        if (isset($map['accessibleModels'])) {
            if (!empty($map['accessibleModels'])) {
                $model->accessibleModels = [];
                $n1 = 0;
                foreach ($map['accessibleModels'] as $item1) {
                    $model->accessibleModels[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['allowAllModels'])) {
            $model->allowAllModels = $map['allowAllModels'];
        }

        return $model;
    }
}
