<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListDeliveryResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListDeliveryResponseBody\data\productList;

class data extends Model
{
    /**
     * @var string
     */
    public $dashboardUrl;

    /**
     * @var bool
     */
    public $displaySwitchOrNot;

    /**
     * @var string
     */
    public $logStoreName;

    /**
     * @var productList[]
     */
    public $productList;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $searchUrl;
    protected $_name = [
        'dashboardUrl' => 'DashboardUrl',
        'displaySwitchOrNot' => 'DisplaySwitchOrNot',
        'logStoreName' => 'LogStoreName',
        'productList' => 'ProductList',
        'projectName' => 'ProjectName',
        'searchUrl' => 'SearchUrl',
    ];

    public function validate()
    {
        if (\is_array($this->productList)) {
            Model::validateArray($this->productList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->productList)) {
                $res['ProductList'] = [];
                $n1 = 0;
                foreach ($this->productList as $item1) {
                    $res['ProductList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['ProductList'] as $item1) {
                    $model->productList[$n1++] = productList::fromMap($item1);
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
