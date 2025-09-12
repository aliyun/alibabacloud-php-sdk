<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umengfinplus\V20220913\Models\CreateComputeTaskRequest;

use AlibabaCloud\Dara\Model;

class morseInfoList extends Model
{
    /**
     * @var string
     */
    public $cuId;

    /**
     * @var string
     */
    public $cuVersion;
    protected $_name = [
        'cuId' => 'cuId',
        'cuVersion' => 'cuVersion',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cuId) {
            $res['cuId'] = $this->cuId;
        }

        if (null !== $this->cuVersion) {
            $res['cuVersion'] = $this->cuVersion;
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
        if (isset($map['cuId'])) {
            $model->cuId = $map['cuId'];
        }

        if (isset($map['cuVersion'])) {
            $model->cuVersion = $map['cuVersion'];
        }

        return $model;
    }
}
