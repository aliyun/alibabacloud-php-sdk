<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models\ListAllInstancesResponseBody\data;

use AlibabaCloud\Dara\Model;

class attributes extends Model
{
    /**
     * @var string
     */
    public $infoKey;

    /**
     * @var string
     */
    public $infoType;

    /**
     * @var string
     */
    public $infoValue;
    protected $_name = [
        'infoKey' => 'infoKey',
        'infoType' => 'infoType',
        'infoValue' => 'infoValue',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->infoKey) {
            $res['infoKey'] = $this->infoKey;
        }

        if (null !== $this->infoType) {
            $res['infoType'] = $this->infoType;
        }

        if (null !== $this->infoValue) {
            $res['infoValue'] = $this->infoValue;
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
        if (isset($map['infoKey'])) {
            $model->infoKey = $map['infoKey'];
        }

        if (isset($map['infoType'])) {
            $model->infoType = $map['infoType'];
        }

        if (isset($map['infoValue'])) {
            $model->infoValue = $map['infoValue'];
        }

        return $model;
    }
}
