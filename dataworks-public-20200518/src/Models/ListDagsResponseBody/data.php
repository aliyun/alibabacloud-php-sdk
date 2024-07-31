<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDagsResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDagsResponseBody\data\dags;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The entities returned.
     *
     * @var dags[]
     */
    public $dags;
    protected $_name = [
        'dags' => 'Dags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dags) {
            $res['Dags'] = [];
            if (null !== $this->dags && \is_array($this->dags)) {
                $n = 0;
                foreach ($this->dags as $item) {
                    $res['Dags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Dags'])) {
            if (!empty($map['Dags'])) {
                $model->dags = [];
                $n           = 0;
                foreach ($map['Dags'] as $item) {
                    $model->dags[$n++] = null !== $item ? dags::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
