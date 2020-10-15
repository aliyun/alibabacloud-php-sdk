<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\ListApplicationsResponse\applications;

use AlibabaCloud\SDK\Ens\V20171110\Models\ListApplicationsResponse\applications\application\appList;
use AlibabaCloud\Tea\Model;

class application extends Model
{
    /**
     * @var string
     */
    public $clusterName;

    /**
     * @var appList
     */
    public $appList;
    protected $_name = [
        'clusterName' => 'ClusterName',
        'appList'     => 'AppList',
    ];

    public function validate()
    {
        Model::validateRequired('clusterName', $this->clusterName, true);
        Model::validateRequired('appList', $this->appList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->appList) {
            $res['AppList'] = null !== $this->appList ? $this->appList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return application
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['AppList'])) {
            $model->appList = appList::fromMap($map['AppList']);
        }

        return $model;
    }
}
