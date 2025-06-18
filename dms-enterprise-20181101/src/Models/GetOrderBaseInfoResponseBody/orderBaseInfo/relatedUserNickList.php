<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetOrderBaseInfoResponseBody\orderBaseInfo;

use AlibabaCloud\Dara\Model;

class relatedUserNickList extends Model
{
    /**
     * @var string[]
     */
    public $userNicks;
    protected $_name = [
        'userNicks' => 'UserNicks',
    ];

    public function validate()
    {
        if (\is_array($this->userNicks)) {
            Model::validateArray($this->userNicks);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->userNicks) {
            if (\is_array($this->userNicks)) {
                $res['UserNicks'] = [];
                $n1 = 0;
                foreach ($this->userNicks as $item1) {
                    $res['UserNicks'][$n1] = $item1;
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
        if (isset($map['UserNicks'])) {
            if (!empty($map['UserNicks'])) {
                $model->userNicks = [];
                $n1 = 0;
                foreach ($map['UserNicks'] as $item1) {
                    $model->userNicks[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
