<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Dara\Model;

class ModifyWebPreciseAccessRuleRequest extends Model
{
    /**
     * @var string
     */
    public $domain;
    /**
     * @var int
     */
    public $expires;
    /**
     * @var string
     */
    public $resourceGroupId;
    /**
     * @var string
     */
    public $rules;
    protected $_name = [
        'domain'          => 'Domain',
        'expires'         => 'Expires',
        'resourceGroupId' => 'ResourceGroupId',
        'rules'           => 'Rules',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }

        if (null !== $this->expires) {
            $res['Expires'] = $this->expires;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->rules) {
            $res['Rules'] = $this->rules;
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
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }

        if (isset($map['Expires'])) {
            $model->expires = $map['Expires'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['Rules'])) {
            $model->rules = $map['Rules'];
        }

        return $model;
    }
}
