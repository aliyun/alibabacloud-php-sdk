<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetOrderBaseInfoResponseBody\orderBaseInfo;

use AlibabaCloud\Dara\Model;

class relatedUserList extends Model
{
    /**
     * @var string[]
     */
    public $userIds;
    protected $_name = [
        'userIds' => 'UserIds',
    ];

    public function validate()
    {
        if (\is_array($this->userIds)) {
            Model::validateArray($this->userIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->userIds) {
            if (\is_array($this->userIds)) {
                $res['UserIds'] = [];
                $n1 = 0;
                foreach ($this->userIds as $item1) {
                    $res['UserIds'][$n1++] = $item1;
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
        if (isset($map['UserIds'])) {
            if (!empty($map['UserIds'])) {
                $model->userIds = [];
                $n1 = 0;
                foreach ($map['UserIds'] as $item1) {
                    $model->userIds[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
