<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\Dara\Model;

class ModifyDefaultLevelRequest extends Model
{
    /**
     * @var int
     */
    public $defaultId;
    /**
     * @var string
     */
    public $lang;
    /**
     * @var string
     */
    public $sensitiveIds;
    protected $_name = [
        'defaultId'    => 'DefaultId',
        'lang'         => 'Lang',
        'sensitiveIds' => 'SensitiveIds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->defaultId) {
            $res['DefaultId'] = $this->defaultId;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->sensitiveIds) {
            $res['SensitiveIds'] = $this->sensitiveIds;
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
        if (isset($map['DefaultId'])) {
            $model->defaultId = $map['DefaultId'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['SensitiveIds'])) {
            $model->sensitiveIds = $map['SensitiveIds'];
        }

        return $model;
    }
}
