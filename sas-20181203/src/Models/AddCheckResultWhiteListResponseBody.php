<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class AddCheckResultWhiteListResponseBody extends Model
{
    /**
     * @var mixed[]
     */
    public $data;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var int[]
     */
    public $ruleIds;
    protected $_name = [
        'data'      => 'Data',
        'requestId' => 'RequestId',
        'ruleIds'   => 'RuleIds',
    ];

    public function validate()
    {
        if (\is_array($this->data)) {
            Model::validateArray($this->data);
        }
        if (\is_array($this->ruleIds)) {
            Model::validateArray($this->ruleIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->data) {
            if (\is_array($this->data)) {
                $res['Data'] = [];
                foreach ($this->data as $key1 => $value1) {
                    $res['Data'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->ruleIds) {
            if (\is_array($this->ruleIds)) {
                $res['RuleIds'] = [];
                $n1             = 0;
                foreach ($this->ruleIds as $item1) {
                    $res['RuleIds'][$n1++] = $item1;
                }
            }
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
        if (isset($map['Data'])) {
            if (!empty($map['Data'])) {
                $model->data = [];
                foreach ($map['Data'] as $key1 => $value1) {
                    $model->data[$key1] = $value1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['RuleIds'])) {
            if (!empty($map['RuleIds'])) {
                $model->ruleIds = [];
                $n1             = 0;
                foreach ($map['RuleIds'] as $item1) {
                    $model->ruleIds[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
