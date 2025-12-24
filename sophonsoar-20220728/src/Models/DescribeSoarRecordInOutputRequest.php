<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\Dara\Model;

class DescribeSoarRecordInOutputRequest extends Model
{
    /**
     * @var string
     */
    public $actionUuid;

    /**
     * @var string
     */
    public $lang;
    protected $_name = [
        'actionUuid' => 'ActionUuid',
        'lang' => 'Lang',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actionUuid) {
            $res['ActionUuid'] = $this->actionUuid;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
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
        if (isset($map['ActionUuid'])) {
            $model->actionUuid = $map['ActionUuid'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        return $model;
    }
}
