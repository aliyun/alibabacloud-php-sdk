<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class UpdateDashboardRequest extends Model
{
    /**
     * @var string[]
     */
    public $attribute;

    /**
     * @var Chart[]
     */
    public $charts;

    /**
     * @var string
     */
    public $dashboardName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $displayName;
    protected $_name = [
        'attribute'     => 'attribute',
        'charts'        => 'charts',
        'dashboardName' => 'dashboardName',
        'description'   => 'description',
        'displayName'   => 'displayName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attribute) {
            $res['attribute'] = $this->attribute;
        }
        if (null !== $this->charts) {
            $res['charts'] = [];
            if (null !== $this->charts && \is_array($this->charts)) {
                $n = 0;
                foreach ($this->charts as $item) {
                    $res['charts'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->dashboardName) {
            $res['dashboardName'] = $this->dashboardName;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->displayName) {
            $res['displayName'] = $this->displayName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateDashboardRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['attribute'])) {
            $model->attribute = $map['attribute'];
        }
        if (isset($map['charts'])) {
            if (!empty($map['charts'])) {
                $model->charts = [];
                $n             = 0;
                foreach ($map['charts'] as $item) {
                    $model->charts[$n++] = null !== $item ? Chart::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['dashboardName'])) {
            $model->dashboardName = $map['dashboardName'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['displayName'])) {
            $model->displayName = $map['displayName'];
        }

        return $model;
    }
}
