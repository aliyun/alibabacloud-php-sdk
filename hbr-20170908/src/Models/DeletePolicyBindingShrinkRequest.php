<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Dara\Model;

class DeletePolicyBindingShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $dataSourceIdsShrink;

    /**
     * @var string
     */
    public $policyId;

    /**
     * @var string
     */
    public $sourceType;
    protected $_name = [
        'dataSourceIdsShrink' => 'DataSourceIds',
        'policyId' => 'PolicyId',
        'sourceType' => 'SourceType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataSourceIdsShrink) {
            $res['DataSourceIds'] = $this->dataSourceIdsShrink;
        }

        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }

        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
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
        if (isset($map['DataSourceIds'])) {
            $model->dataSourceIdsShrink = $map['DataSourceIds'];
        }

        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }

        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        return $model;
    }
}
