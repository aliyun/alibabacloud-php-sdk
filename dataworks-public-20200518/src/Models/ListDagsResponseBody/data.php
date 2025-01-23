<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDagsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDagsResponseBody\data\dags;

class data extends Model
{
    /**
     * @var dags[]
     */
    public $dags;
    protected $_name = [
        'dags' => 'Dags',
    ];

    public function validate()
    {
        if (\is_array($this->dags)) {
            Model::validateArray($this->dags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dags) {
            if (\is_array($this->dags)) {
                $res['Dags'] = [];
                $n1          = 0;
                foreach ($this->dags as $item1) {
                    $res['Dags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Dags'])) {
            if (!empty($map['Dags'])) {
                $model->dags = [];
                $n1          = 0;
                foreach ($map['Dags'] as $item1) {
                    $model->dags[$n1++] = dags::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
