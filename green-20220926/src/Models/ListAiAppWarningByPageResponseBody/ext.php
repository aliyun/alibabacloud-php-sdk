<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models\ListAiAppWarningByPageResponseBody;

use AlibabaCloud\Dara\Model;

class ext extends Model
{
    /**
     * @var mixed[]
     */
    public $option;
    protected $_name = [
        'option' => 'Option',
    ];

    public function validate()
    {
        if (\is_array($this->option)) {
            Model::validateArray($this->option);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->option) {
            if (\is_array($this->option)) {
                $res['Option'] = [];
                foreach ($this->option as $key1 => $value1) {
                    $res['Option'][$key1] = $value1;
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
        if (isset($map['Option'])) {
            if (!empty($map['Option'])) {
                $model->option = [];
                foreach ($map['Option'] as $key1 => $value1) {
                    $model->option[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
