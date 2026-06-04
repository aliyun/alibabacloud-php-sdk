<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetAppCodeWorkspaceDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetAppCodeWorkspaceDetailResponseBody\module\snapshots;

class module extends Model
{
    /**
     * @var int
     */
    public $activeLogicalNumber;

    /**
     * @var bool
     */
    public $isDirty;

    /**
     * @var int
     */
    public $maxLogicalNumber;

    /**
     * @var string
     */
    public $siteId;

    /**
     * @var snapshots[]
     */
    public $snapshots;
    protected $_name = [
        'activeLogicalNumber' => 'ActiveLogicalNumber',
        'isDirty' => 'IsDirty',
        'maxLogicalNumber' => 'MaxLogicalNumber',
        'siteId' => 'SiteId',
        'snapshots' => 'Snapshots',
    ];

    public function validate()
    {
        if (\is_array($this->snapshots)) {
            Model::validateArray($this->snapshots);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->activeLogicalNumber) {
            $res['ActiveLogicalNumber'] = $this->activeLogicalNumber;
        }

        if (null !== $this->isDirty) {
            $res['IsDirty'] = $this->isDirty;
        }

        if (null !== $this->maxLogicalNumber) {
            $res['MaxLogicalNumber'] = $this->maxLogicalNumber;
        }

        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }

        if (null !== $this->snapshots) {
            if (\is_array($this->snapshots)) {
                $res['Snapshots'] = [];
                $n1 = 0;
                foreach ($this->snapshots as $item1) {
                    $res['Snapshots'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['ActiveLogicalNumber'])) {
            $model->activeLogicalNumber = $map['ActiveLogicalNumber'];
        }

        if (isset($map['IsDirty'])) {
            $model->isDirty = $map['IsDirty'];
        }

        if (isset($map['MaxLogicalNumber'])) {
            $model->maxLogicalNumber = $map['MaxLogicalNumber'];
        }

        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }

        if (isset($map['Snapshots'])) {
            if (!empty($map['Snapshots'])) {
                $model->snapshots = [];
                $n1 = 0;
                foreach ($map['Snapshots'] as $item1) {
                    $model->snapshots[$n1] = snapshots::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
