<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Milvus\V20231012\Models;

use AlibabaCloud\Dara\Model;

class RamBindingEntry extends Model
{
    /**
     * @var string
     */
    public $boundUid;

    /**
     * @var string
     */
    public $boundUserName;

    /**
     * @var string
     */
    public $milvusUsername;
    protected $_name = [
        'boundUid' => 'boundUid',
        'boundUserName' => 'boundUserName',
        'milvusUsername' => 'milvusUsername',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->boundUid) {
            $res['boundUid'] = $this->boundUid;
        }

        if (null !== $this->boundUserName) {
            $res['boundUserName'] = $this->boundUserName;
        }

        if (null !== $this->milvusUsername) {
            $res['milvusUsername'] = $this->milvusUsername;
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
        if (isset($map['boundUid'])) {
            $model->boundUid = $map['boundUid'];
        }

        if (isset($map['boundUserName'])) {
            $model->boundUserName = $map['boundUserName'];
        }

        if (isset($map['milvusUsername'])) {
            $model->milvusUsername = $map['milvusUsername'];
        }

        return $model;
    }
}
