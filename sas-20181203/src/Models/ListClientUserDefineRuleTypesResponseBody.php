<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ListClientUserDefineRuleTypesResponseBody extends Model
{
    /**
     * @example 340D7FC4-D575-1661-8ACD-CFA7BE57****
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->userDefineRuleTypes) {
            $res['UserDefineRuleTypes'] = $this->userDefineRuleTypes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListClientUserDefineRuleTypesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UserDefineRuleTypes'])) {
            if (!empty($map['UserDefineRuleTypes'])) {
                $model->userDefineRuleTypes = $map['UserDefineRuleTypes'];
            }
        }

        return $model;
    }
}
