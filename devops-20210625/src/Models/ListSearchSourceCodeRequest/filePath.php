<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListSearchSourceCodeRequest;

use AlibabaCloud\Dara\Model;

class filePath extends Model
{
    /**
     * @var string
     */
    public $matchType;
    /**
     * @var string
     */
    public $operatorType;
    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'matchType'    => 'matchType',
        'operatorType' => 'operatorType',
        'value'        => 'value',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->matchType) {
            $res['matchType'] = $this->matchType;
        }

        if (null !== $this->operatorType) {
            $res['operatorType'] = $this->operatorType;
        }

        if (null !== $this->value) {
            $res['value'] = $this->value;
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
        if (isset($map['matchType'])) {
            $model->matchType = $map['matchType'];
        }

        if (isset($map['operatorType'])) {
            $model->operatorType = $map['operatorType'];
        }

        if (isset($map['value'])) {
            $model->value = $map['value'];
        }

        return $model;
    }
}
