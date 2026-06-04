<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models;

use AlibabaCloud\Dara\Model;

class RollbackAppCodeSnapshotRequest extends Model
{
    /**
     * @var string
     */
    public $siteId;

    /**
     * @var int
     */
    public $targetLogicalNumber;
    protected $_name = [
        'siteId' => 'SiteId',
        'targetLogicalNumber' => 'TargetLogicalNumber',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }

        if (null !== $this->targetLogicalNumber) {
            $res['TargetLogicalNumber'] = $this->targetLogicalNumber;
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
        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }

        if (isset($map['TargetLogicalNumber'])) {
            $model->targetLogicalNumber = $map['TargetLogicalNumber'];
        }

        return $model;
    }
}
