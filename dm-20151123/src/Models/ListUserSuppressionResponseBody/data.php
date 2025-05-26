<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models\ListUserSuppressionResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dm\V20151123\Models\ListUserSuppressionResponseBody\data\userSuppressions;

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
        if (\is_array($this->userSuppressions)) {
            Model::validateArray($this->userSuppressions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->userSuppressions) {
            if (\is_array($this->userSuppressions)) {
                $res['UserSuppressions'] = [];
                $n1 = 0;
                foreach ($this->userSuppressions as $item1) {
                    $res['UserSuppressions'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['UserSuppressions'])) {
            if (!empty($map['UserSuppressions'])) {
                $model->userSuppressions = [];
                $n1 = 0;
                foreach ($map['UserSuppressions'] as $item1) {
                    $model->userSuppressions[$n1++] = userSuppressions::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
