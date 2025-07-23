<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\AddonMeta\environments\policies;

use AlibabaCloud\Tea\Model;

class bindEntity extends Model
{
    /**
     * @var bool
     */
    public $entityGroupMode;

    /**
     * @var string
     */
    public $entityType;

    /**
     * @var bool
     */
    public $singleEntityMode;

    /**
     * @var string
     */
    public $vpcIdFieldKey;
    protected $_name = [
        'entityGroupMode' => 'entityGroupMode',
        'entityType' => 'entityType',
        'singleEntityMode' => 'singleEntityMode',
        'vpcIdFieldKey' => 'vpcIdFieldKey',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->entityGroupMode) {
            $res['entityGroupMode'] = $this->entityGroupMode;
        }
        if (null !== $this->entityType) {
            $res['entityType'] = $this->entityType;
        }
        if (null !== $this->singleEntityMode) {
            $res['singleEntityMode'] = $this->singleEntityMode;
        }
        if (null !== $this->vpcIdFieldKey) {
            $res['vpcIdFieldKey'] = $this->vpcIdFieldKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bindEntity
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['entityGroupMode'])) {
            $model->entityGroupMode = $map['entityGroupMode'];
        }
        if (isset($map['entityType'])) {
            $model->entityType = $map['entityType'];
        }
        if (isset($map['singleEntityMode'])) {
            $model->singleEntityMode = $map['singleEntityMode'];
        }
        if (isset($map['vpcIdFieldKey'])) {
            $model->vpcIdFieldKey = $map['vpcIdFieldKey'];
        }

        return $model;
    }
}
