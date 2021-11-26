<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\ListGreyTagRouteResponseBody\data;

use AlibabaCloud\SDK\Sae\V20190506\Models\ListGreyTagRouteResponseBody\data\result\dubboRules;
use AlibabaCloud\SDK\Sae\V20190506\Models\ListGreyTagRouteResponseBody\data\result\scRules;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var dubboRules[]
     */
    public $dubboRules;

    /**
     * @var int
     */
    public $greyTagRouteId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var scRules[]
     */
    public $scRules;

    /**
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'createTime'     => 'CreateTime',
        'description'    => 'Description',
        'dubboRules'     => 'DubboRules',
        'greyTagRouteId' => 'GreyTagRouteId',
        'name'           => 'Name',
        'scRules'        => 'ScRules',
        'updateTime'     => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->dubboRules) {
            $res['DubboRules'] = [];
            if (null !== $this->dubboRules && \is_array($this->dubboRules)) {
                $n = 0;
                foreach ($this->dubboRules as $item) {
                    $res['DubboRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->greyTagRouteId) {
            $res['GreyTagRouteId'] = $this->greyTagRouteId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->scRules) {
            $res['ScRules'] = [];
            if (null !== $this->scRules && \is_array($this->scRules)) {
                $n = 0;
                foreach ($this->scRules as $item) {
                    $res['ScRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DubboRules'])) {
            if (!empty($map['DubboRules'])) {
                $model->dubboRules = [];
                $n                 = 0;
                foreach ($map['DubboRules'] as $item) {
                    $model->dubboRules[$n++] = null !== $item ? dubboRules::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['GreyTagRouteId'])) {
            $model->greyTagRouteId = $map['GreyTagRouteId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ScRules'])) {
            if (!empty($map['ScRules'])) {
                $model->scRules = [];
                $n              = 0;
                foreach ($map['ScRules'] as $item) {
                    $model->scRules[$n++] = null !== $item ? scRules::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
