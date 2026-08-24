<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\ListVirusScanAdditionalListsResponseBody\additionalLists\lists;

use AlibabaCloud\Dara\Model;

class listDetail extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $detail;

    /**
     * @var string
     */
    public $listId;
    protected $_name = [
        'createTime' => 'CreateTime',
        'detail' => 'Detail',
        'listId' => 'ListId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
        }

        if (null !== $this->listId) {
            $res['ListId'] = $this->listId;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
        }

        if (isset($map['ListId'])) {
            $model->listId = $map['ListId'];
        }

        return $model;
    }
}
