<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeGreyTagRouteResponseBody;

use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeGreyTagRouteResponseBody\data\albRules;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeGreyTagRouteResponseBody\data\dubboRules;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeGreyTagRouteResponseBody\data\scRules;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var albRules[]
     */
    public $albRules;

    /**
     * @description The ID of the application.
     *
     * @example 3faaf993-7aed-4bcd-b189-625e6a5a****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The timestamp when the canary release rule was created. Unit: milliseconds.
     *
     * @example 1619007592013
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The description of the canary release rule.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description The canary release rule of the Dubbo service.
     *
     * @var dubboRules[]
     */
    public $dubboRules;

    /**
     * @description The ID of the canary release rule. The ID is globally unique.
     *
     * @example 16
     *
     * @var int
     */
    public $greyTagRouteId;

    /**
     * @description The name of the canary release rule.
     *
     * @example rule-name
     *
     * @var string
     */
    public $name;

    /**
     * @description The canary release rule of the Spring Cloud application.
     *
     * @var scRules[]
     */
    public $scRules;

    /**
     * @description The timestamp when the canary release rule was updated. Unit: milliseconds.
     *
     * @example 1609434061000
     *
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'albRules'       => 'AlbRules',
        'appId'          => 'AppId',
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
        if (null !== $this->albRules) {
            $res['AlbRules'] = [];
            if (null !== $this->albRules && \is_array($this->albRules)) {
                $n = 0;
                foreach ($this->albRules as $item) {
                    $res['AlbRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
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
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlbRules'])) {
            if (!empty($map['AlbRules'])) {
                $model->albRules = [];
                $n               = 0;
                foreach ($map['AlbRules'] as $item) {
                    $model->albRules[$n++] = null !== $item ? albRules::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
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
