<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models;

use AlibabaCloud\Dara\Model;

class GenerateOssUrlRequest extends Model
{
    /**
     * @var string[]
     */
    public $objectNameList;

    /**
     * @var string
     */
    public $sessionId;
    protected $_name = [
        'objectNameList' => 'ObjectNameList',
        'sessionId' => 'SessionId',
    ];

    public function validate()
    {
        if (\is_array($this->objectNameList)) {
            Model::validateArray($this->objectNameList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->objectNameList) {
            if (\is_array($this->objectNameList)) {
                $res['ObjectNameList'] = [];
                $n1 = 0;
                foreach ($this->objectNameList as $item1) {
                    $res['ObjectNameList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
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
        if (isset($map['ObjectNameList'])) {
            if (!empty($map['ObjectNameList'])) {
                $model->objectNameList = [];
                $n1 = 0;
                foreach ($map['ObjectNameList'] as $item1) {
                    $model->objectNameList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        return $model;
    }
}
