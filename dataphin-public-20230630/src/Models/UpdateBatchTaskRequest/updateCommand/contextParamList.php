<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateBatchTaskRequest\updateCommand;

use AlibabaCloud\Dara\Model;

class contextParamList extends Model
{
    /**
     * @var string
     */
    public $defaultValue;

    /**
     * @var string
     */
    public $desc;

    /**
     * @var string
     */
    public $paramKey;
    protected $_name = [
        'defaultValue' => 'DefaultValue',
        'desc' => 'Desc',
        'paramKey' => 'ParamKey',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->defaultValue) {
            $res['DefaultValue'] = $this->defaultValue;
        }

        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
        }

        if (null !== $this->paramKey) {
            $res['ParamKey'] = $this->paramKey;
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
        if (isset($map['DefaultValue'])) {
            $model->defaultValue = $map['DefaultValue'];
        }

        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }

        if (isset($map['ParamKey'])) {
            $model->paramKey = $map['ParamKey'];
        }

        return $model;
    }
}
