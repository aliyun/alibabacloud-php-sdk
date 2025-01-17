<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\QueryMediaCensorJobListResponseBody;

use AlibabaCloud\Dara\Model;

class nonExistIds extends Model
{
    /**
     * @var string[]
     */
    public $string;
    protected $_name = [
        'string' => 'String',
    ];

    public function validate()
    {
        if (\is_array($this->string)) {
            Model::validateArray($this->string);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->string) {
            if (\is_array($this->string)) {
                $res['String'] = [];
                $n1            = 0;
                foreach ($this->string as $item1) {
                    $res['String'][$n1++] = $item1;
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
        if (isset($map['String'])) {
            if (!empty($map['String'])) {
                $model->string = [];
                $n1            = 0;
                foreach ($map['String'] as $item1) {
                    $model->string[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
