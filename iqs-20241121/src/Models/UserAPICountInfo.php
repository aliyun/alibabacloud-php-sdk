<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20241121\Models;

use AlibabaCloud\Dara\Model;

class UserAPICountInfo extends Model
{
    /**
     * @var string
     */
    public $apiType;

    /**
     * @var string
     */
    public $scope;

    /**
     * @var int
     */
    public $usedCount;
    protected $_name = [
        'apiType' => 'apiType',
        'scope' => 'scope',
        'usedCount' => 'usedCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiType) {
            $res['apiType'] = $this->apiType;
        }

        if (null !== $this->scope) {
            $res['scope'] = $this->scope;
        }

        if (null !== $this->usedCount) {
            $res['usedCount'] = $this->usedCount;
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
        if (isset($map['apiType'])) {
            $model->apiType = $map['apiType'];
        }

        if (isset($map['scope'])) {
            $model->scope = $map['scope'];
        }

        if (isset($map['usedCount'])) {
            $model->usedCount = $map['usedCount'];
        }

        return $model;
    }
}
