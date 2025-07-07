<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AccountCenter\V20241209\Models\EnterpriseRoleQueryAccountForRoleGrantByPageResponseBody;

use AlibabaCloud\Dara\Model;

class accounts extends Model
{
    /**
     * @var string
     */
    public $alias;

    /**
     * @var string
     */
    public $aliyunId;

    /**
     * @var bool
     */
    public $granted;

    /**
     * @var string
     */
    public $pk;
    protected $_name = [
        'alias' => 'Alias',
        'aliyunId' => 'AliyunId',
        'granted' => 'Granted',
        'pk' => 'Pk',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alias) {
            $res['Alias'] = $this->alias;
        }

        if (null !== $this->aliyunId) {
            $res['AliyunId'] = $this->aliyunId;
        }

        if (null !== $this->granted) {
            $res['Granted'] = $this->granted;
        }

        if (null !== $this->pk) {
            $res['Pk'] = $this->pk;
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
        if (isset($map['Alias'])) {
            $model->alias = $map['Alias'];
        }

        if (isset($map['AliyunId'])) {
            $model->aliyunId = $map['AliyunId'];
        }

        if (isset($map['Granted'])) {
            $model->granted = $map['Granted'];
        }

        if (isset($map['Pk'])) {
            $model->pk = $map['Pk'];
        }

        return $model;
    }
}
