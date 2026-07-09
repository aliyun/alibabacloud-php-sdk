<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\ObserveGroupDetail;

use AlibabaCloud\Dara\Model;

class entitySummaries extends Model
{
    /**
     * @var string
     */
    public $entityCategory;

    /**
     * @var int
     */
    public $entityCount;

    /**
     * @var string
     */
    public $entityDomain;

    /**
     * @var string
     */
    public $entityType;
    protected $_name = [
        'entityCategory' => 'entityCategory',
        'entityCount' => 'entityCount',
        'entityDomain' => 'entityDomain',
        'entityType' => 'entityType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->entityCategory) {
            $res['entityCategory'] = $this->entityCategory;
        }

        if (null !== $this->entityCount) {
            $res['entityCount'] = $this->entityCount;
        }

        if (null !== $this->entityDomain) {
            $res['entityDomain'] = $this->entityDomain;
        }

        if (null !== $this->entityType) {
            $res['entityType'] = $this->entityType;
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
        if (isset($map['entityCategory'])) {
            $model->entityCategory = $map['entityCategory'];
        }

        if (isset($map['entityCount'])) {
            $model->entityCount = $map['entityCount'];
        }

        if (isset($map['entityDomain'])) {
            $model->entityDomain = $map['entityDomain'];
        }

        if (isset($map['entityType'])) {
            $model->entityType = $map['entityType'];
        }

        return $model;
    }
}
