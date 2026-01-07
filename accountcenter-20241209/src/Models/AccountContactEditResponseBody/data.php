<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AccountCenter\V20241209\Models\AccountContactEditResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AccountCenter\V20241209\Models\AccountContactEditResponseBody\data\errorList;

class data extends Model
{
    /**
     * @var int
     */
    public $contactId;

    /**
     * @var errorList[]
     */
    public $errorList;

    /**
     * @var bool
     */
    public $result;
    protected $_name = [
        'contactId' => 'ContactId',
        'errorList' => 'ErrorList',
        'result' => 'Result',
    ];

    public function validate()
    {
        if (\is_array($this->errorList)) {
            Model::validateArray($this->errorList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contactId) {
            $res['ContactId'] = $this->contactId;
        }

        if (null !== $this->errorList) {
            if (\is_array($this->errorList)) {
                $res['ErrorList'] = [];
                $n1 = 0;
                foreach ($this->errorList as $item1) {
                    $res['ErrorList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->result) {
            $res['Result'] = $this->result;
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
        if (isset($map['ContactId'])) {
            $model->contactId = $map['ContactId'];
        }

        if (isset($map['ErrorList'])) {
            if (!empty($map['ErrorList'])) {
                $model->errorList = [];
                $n1 = 0;
                foreach ($map['ErrorList'] as $item1) {
                    $model->errorList[$n1] = errorList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }

        return $model;
    }
}
