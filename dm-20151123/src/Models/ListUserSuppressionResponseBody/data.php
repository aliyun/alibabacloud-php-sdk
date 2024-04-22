<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models\ListUserSuppressionResponseBody;

use AlibabaCloud\SDK\Dm\V20151123\Models\ListUserSuppressionResponseBody\data\userSuppressions;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var userSuppressions[]
     */
    public $userSuppressions;
    protected $_name = [
        'userSuppressions' => 'UserSuppressions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userSuppressions) {
            $res['UserSuppressions'] = [];
            if (null !== $this->userSuppressions && \is_array($this->userSuppressions)) {
                $n = 0;
                foreach ($this->userSuppressions as $item) {
                    $res['UserSuppressions'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['UserSuppressions'])) {
            if (!empty($map['UserSuppressions'])) {
                $model->userSuppressions = [];
                $n                       = 0;
                foreach ($map['UserSuppressions'] as $item) {
                    $model->userSuppressions[$n++] = null !== $item ? userSuppressions::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
