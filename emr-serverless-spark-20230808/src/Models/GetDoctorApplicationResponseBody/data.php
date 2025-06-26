<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\GetDoctorApplicationResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string[]
     */
    public $suggestions;
    protected $_name = [
        'suggestions' => 'suggestions',
    ];

    public function validate()
    {
        if (\is_array($this->suggestions)) {
            Model::validateArray($this->suggestions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->suggestions) {
            if (\is_array($this->suggestions)) {
                $res['suggestions'] = [];
                $n1 = 0;
                foreach ($this->suggestions as $item1) {
                    $res['suggestions'][$n1] = $item1;
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
        if (isset($map['suggestions'])) {
            if (!empty($map['suggestions'])) {
                $model->suggestions = [];
                $n1 = 0;
                foreach ($map['suggestions'] as $item1) {
                    $model->suggestions[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
