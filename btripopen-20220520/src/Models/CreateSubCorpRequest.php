<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;

class CreateSubCorpRequest extends Model
{
    /**
     * @var string
     */
    public $outerCorpId;

    /**
     * @var string
     */
    public $outerCorpName;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'outerCorpId' => 'outer_corp_id',
        'outerCorpName' => 'outer_corp_name',
        'userId' => 'user_id',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->outerCorpId) {
            $res['outer_corp_id'] = $this->outerCorpId;
        }

        if (null !== $this->outerCorpName) {
            $res['outer_corp_name'] = $this->outerCorpName;
        }

        if (null !== $this->userId) {
            $res['user_id'] = $this->userId;
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
        if (isset($map['outer_corp_id'])) {
            $model->outerCorpId = $map['outer_corp_id'];
        }

        if (isset($map['outer_corp_name'])) {
            $model->outerCorpName = $map['outer_corp_name'];
        }

        if (isset($map['user_id'])) {
            $model->userId = $map['user_id'];
        }

        return $model;
    }
}
