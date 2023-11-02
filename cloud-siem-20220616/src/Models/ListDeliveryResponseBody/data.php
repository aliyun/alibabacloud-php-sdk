<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListDeliveryResponseBody;

use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListDeliveryResponseBody\data\productList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example https://sls4service.console.aliyun.com/lognext/project/aliyun-cloudsiem-data-127608589417****-cn-shanghai
     * /dashboard/cloud-siem?isShare=true&hideTopbar=true&hideSidebar=true&ignoreTabLocalStorage=true
     * @var string
     */
    public $dashboardUrl;

    /**
     * @example true
     *
     * @var bool
     */
    public $displaySwitchOrNot;

    /**
     * @example cloud-siem
     *
     * @var string
     */
    public $logStoreName;

    /**
     * @var productList[]
     */
    public $productList;

    /**
     * @example aliyun-cloudsiem-data-127608589417****-cn-shanghai
     *
     * @var string
     */
    public $projectName;

    /**
     * @example https://sls4service.console.aliyun.com/lognext/project/aliyun-cloudsiem-data-127608589417****-cn-shanghai
     * /logsearch/cloud-siem?isShare=true&hideTopbar=true&hideSidebar=true&ignoreTabLocalStorage=true
     * @var string
     */
    public $searchUrl;
    protected $_name = [
        'dashboardUrl'       => 'DashboardUrl',
        'displaySwitchOrNot' => 'DisplaySwitchOrNot',
        'logStoreName'       => 'LogStoreName',
        'productList'        => 'ProductList',
        'projectName'        => 'ProjectName',
        'searchUrl'          => 'SearchUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dashboardUrl) {
            $res['DashboardUrl'] = $this->dashboardUrl;
        }
        if (null !== $this->displaySwitchOrNot) {
            $res['DisplaySwitchOrNot'] = $this->displaySwitchOrNot;
        }
        if (null !== $this->logStoreName) {
            $res['LogStoreName'] = $this->logStoreName;
        }
        if (null !== $this->productList) {
            $res['ProductList'] = [];
            if (null !== $this->productList && \is_array($this->productList)) {
                $n = 0;
                foreach ($this->productList as $item) {
                    $res['ProductList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->searchUrl) {
            $res['SearchUrl'] = $this->searchUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DashboardUrl'])) {
            $model->dashboardUrl = $map['DashboardUrl'];
        }
        if (isset($map['DisplaySwitchOrNot'])) {
            $model->displaySwitchOrNot = $map['DisplaySwitchOrNot'];
        }
        if (isset($map['LogStoreName'])) {
            $model->logStoreName = $map['LogStoreName'];
        }
        if (isset($map['ProductList'])) {
            if (!empty($map['ProductList'])) {
                $model->productList = [];
                $n                  = 0;
                foreach ($map['ProductList'] as $item) {
                    $model->productList[$n++] = null !== $item ? productList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['SearchUrl'])) {
            $model->searchUrl = $map['SearchUrl'];
        }

        return $model;
    }
}
