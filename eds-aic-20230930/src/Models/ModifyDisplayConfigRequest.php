<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\ModifyDisplayConfigRequest\displayConfig;

class ModifyDisplayConfigRequest extends Model
{
    /**
     * @var string[]
     */
    public $androidInstanceIds;

    /**
     * @var displayConfig
     */
    public $displayConfig;
    protected $_name = [
        'androidInstanceIds' => 'AndroidInstanceIds',
        'displayConfig' => 'DisplayConfig',
    ];

    public function validate()
    {
        if (\is_array($this->androidInstanceIds)) {
            Model::validateArray($this->androidInstanceIds);
        }
        if (null !== $this->displayConfig) {
            $this->displayConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->androidInstanceIds) {
            if (\is_array($this->androidInstanceIds)) {
                $res['AndroidInstanceIds'] = [];
                $n1 = 0;
                foreach ($this->androidInstanceIds as $item1) {
                    $res['AndroidInstanceIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->displayConfig) {
            $res['DisplayConfig'] = null !== $this->displayConfig ? $this->displayConfig->toArray($noStream) : $this->displayConfig;
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
        if (isset($map['AndroidInstanceIds'])) {
            if (!empty($map['AndroidInstanceIds'])) {
                $model->androidInstanceIds = [];
                $n1 = 0;
                foreach ($map['AndroidInstanceIds'] as $item1) {
                    $model->androidInstanceIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['DisplayConfig'])) {
            $model->displayConfig = displayConfig::fromMap($map['DisplayConfig']);
        }

        return $model;
    }
}
