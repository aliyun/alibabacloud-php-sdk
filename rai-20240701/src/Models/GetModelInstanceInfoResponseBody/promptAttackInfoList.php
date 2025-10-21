<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RAI\V20240701\Models\GetModelInstanceInfoResponseBody;

use AlibabaCloud\Dara\Model;

class promptAttackInfoList extends Model
{
    /**
     * @var int
     */
    public $categoryId;

    /**
     * @var string
     */
    public $categoryLabel;

    /**
     * @var int
     */
    public $securityLevel;
    protected $_name = [
        'categoryId' => 'CategoryId',
        'categoryLabel' => 'CategoryLabel',
        'securityLevel' => 'SecurityLevel',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }

        if (null !== $this->categoryLabel) {
            $res['CategoryLabel'] = $this->categoryLabel;
        }

        if (null !== $this->securityLevel) {
            $res['SecurityLevel'] = $this->securityLevel;
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
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }

        if (isset($map['CategoryLabel'])) {
            $model->categoryLabel = $map['CategoryLabel'];
        }

        if (isset($map['SecurityLevel'])) {
            $model->securityLevel = $map['SecurityLevel'];
        }

        return $model;
    }
}
