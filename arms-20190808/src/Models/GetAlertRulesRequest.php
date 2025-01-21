<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetAlertRulesRequest\tags;

class GetAlertRulesRequest extends Model
{
    /**
     * @var string
     */
    public $alertIds;
    /**
     * @var string
     */
    public $alertNames;
    /**
     * @var string
     */
    public $alertStatus;
    /**
     * @var string
     */
    public $alertType;
    /**
     * @var string
     */
    public $clusterId;
    /**
     * @var int
     */
    public $page;
    /**
     * @var string
     */
    public $productCode;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var int
     */
    public $size;
    /**
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'alertIds'    => 'AlertIds',
        'alertNames'  => 'AlertNames',
        'alertStatus' => 'AlertStatus',
        'alertType'   => 'AlertType',
        'clusterId'   => 'ClusterId',
        'page'        => 'Page',
        'productCode' => 'ProductCode',
        'regionId'    => 'RegionId',
        'size'        => 'Size',
        'tags'        => 'Tags',
    ];

    public function validate()
    {
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertIds) {
            $res['AlertIds'] = $this->alertIds;
        }

        if (null !== $this->alertNames) {
            $res['AlertNames'] = $this->alertNames;
        }

        if (null !== $this->alertStatus) {
            $res['AlertStatus'] = $this->alertStatus;
        }

        if (null !== $this->alertType) {
            $res['AlertType'] = $this->alertType;
        }

        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }

        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1          = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AlertIds'])) {
            $model->alertIds = $map['AlertIds'];
        }

        if (isset($map['AlertNames'])) {
            $model->alertNames = $map['AlertNames'];
        }

        if (isset($map['AlertStatus'])) {
            $model->alertStatus = $map['AlertStatus'];
        }

        if (isset($map['AlertType'])) {
            $model->alertType = $map['AlertType'];
        }

        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }

        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1          = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
