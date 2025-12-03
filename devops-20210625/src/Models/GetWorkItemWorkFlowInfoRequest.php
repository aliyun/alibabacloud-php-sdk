<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Dara\Model;

class GetWorkItemWorkFlowInfoRequest extends Model
{
    /**
     * @var string
     */
    public $configurationId;
    protected $_name = [
        'configurationId' => 'configurationId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configurationId) {
            $res['configurationId'] = $this->configurationId;
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
        if (isset($map['configurationId'])) {
            $model->configurationId = $map['configurationId'];
        }

        return $model;
    }
}
