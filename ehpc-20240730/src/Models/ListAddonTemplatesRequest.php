<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models;

use AlibabaCloud\Dara\Model;

class ListAddonTemplatesRequest extends Model
{
    /**
     * @var string[]
     */
    public $addonNames;

    /**
     * @var string
     */
    public $clusterCategory;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'addonNames' => 'AddonNames',
        'clusterCategory' => 'ClusterCategory',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        if (\is_array($this->addonNames)) {
            Model::validateArray($this->addonNames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addonNames) {
            if (\is_array($this->addonNames)) {
                $res['AddonNames'] = [];
                $n1 = 0;
                foreach ($this->addonNames as $item1) {
                    $res['AddonNames'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->clusterCategory) {
            $res['ClusterCategory'] = $this->clusterCategory;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['AddonNames'])) {
            if (!empty($map['AddonNames'])) {
                $model->addonNames = [];
                $n1 = 0;
                foreach ($map['AddonNames'] as $item1) {
                    $model->addonNames[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ClusterCategory'])) {
            $model->clusterCategory = $map['ClusterCategory'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
