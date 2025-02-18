<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListQuotasPlansResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListQuotasPlansResponseBody\data\planList\quota;

class planList extends Model
{
    /**
     * @var string
     */
    public $createTime;
    /**
     * @var string
     */
    public $name;
    /**
     * @var quota
     */
    public $quota;
    protected $_name = [
        'createTime' => 'createTime',
        'name'       => 'name',
        'quota'      => 'quota',
    ];

    public function validate()
    {
        if (null !== $this->quota) {
            $this->quota->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->quota) {
            $res['quota'] = null !== $this->quota ? $this->quota->toArray($noStream) : $this->quota;
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
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['quota'])) {
            $model->quota = quota::fromMap($map['quota']);
        }

        return $model;
    }
}
