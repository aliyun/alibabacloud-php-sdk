<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListLivyComputeResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListLivyComputeResponseBody\data\livyComputes;

class data extends Model
{
    /**
     * @var livyComputes[]
     */
    public $livyComputes;
    protected $_name = [
        'livyComputes' => 'livyComputes',
    ];

    public function validate()
    {
        if (\is_array($this->livyComputes)) {
            Model::validateArray($this->livyComputes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->livyComputes) {
            if (\is_array($this->livyComputes)) {
                $res['livyComputes'] = [];
                $n1 = 0;
                foreach ($this->livyComputes as $item1) {
                    $res['livyComputes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['livyComputes'])) {
            if (!empty($map['livyComputes'])) {
                $model->livyComputes = [];
                $n1 = 0;
                foreach ($map['livyComputes'] as $item1) {
                    $model->livyComputes[$n1] = livyComputes::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
