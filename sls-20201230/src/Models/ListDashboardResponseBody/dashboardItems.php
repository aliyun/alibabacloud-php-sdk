<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models\ListDashboardResponseBody;

use AlibabaCloud\Tea\Model;

class dashboardItems extends Model
{
    /**
     * @var string
     */
    public $dashboardName;

    /**
     * @var string
     */
    public $displayName;
    protected $_name = [
        'dashboardName' => 'dashboardName',
        'displayName'   => 'displayName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dashboardName) {
            $res['dashboardName'] = $this->dashboardName;
        }
        if (null !== $this->displayName) {
            $res['displayName'] = $this->displayName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dashboardItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['dashboardName'])) {
            $model->dashboardName = $map['dashboardName'];
        }
        if (isset($map['displayName'])) {
            $model->displayName = $map['displayName'];
        }

        return $model;
    }
}
