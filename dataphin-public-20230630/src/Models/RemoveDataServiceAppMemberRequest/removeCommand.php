<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\RemoveDataServiceAppMemberRequest;

use AlibabaCloud\Dara\Model;

class removeCommand extends Model
{
    /**
     * @var int
     */
    public $appId;

    /**
     * @var string[]
     */
    public $memberIds;
    protected $_name = [
        'appId' => 'AppId',
        'memberIds' => 'MemberIds',
    ];

    public function validate()
    {
        if (\is_array($this->memberIds)) {
            Model::validateArray($this->memberIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->memberIds) {
            if (\is_array($this->memberIds)) {
                $res['MemberIds'] = [];
                $n1 = 0;
                foreach ($this->memberIds as $item1) {
                    $res['MemberIds'][$n1] = $item1;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['MemberIds'])) {
            if (!empty($map['MemberIds'])) {
                $model->memberIds = [];
                $n1 = 0;
                foreach ($map['MemberIds'] as $item1) {
                    $model->memberIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
