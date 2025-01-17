<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class ListClientUserDefineRuleTypesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var string[]
     */
    public $userDefineRuleTypes;
    protected $_name = [
        'requestId'           => 'RequestId',
        'userDefineRuleTypes' => 'UserDefineRuleTypes',
    ];

    public function validate()
    {
        if (\is_array($this->userDefineRuleTypes)) {
            Model::validateArray($this->userDefineRuleTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->userDefineRuleTypes) {
            if (\is_array($this->userDefineRuleTypes)) {
                $res['UserDefineRuleTypes'] = [];
                $n1                         = 0;
                foreach ($this->userDefineRuleTypes as $item1) {
                    $res['UserDefineRuleTypes'][$n1++] = $item1;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['UserDefineRuleTypes'])) {
            if (!empty($map['UserDefineRuleTypes'])) {
                $model->userDefineRuleTypes = [];
                $n1                         = 0;
                foreach ($map['UserDefineRuleTypes'] as $item1) {
                    $model->userDefineRuleTypes[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
