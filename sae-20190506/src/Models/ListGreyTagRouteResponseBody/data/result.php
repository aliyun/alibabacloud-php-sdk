<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\ListGreyTagRouteResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sae\V20190506\Models\ListGreyTagRouteResponseBody\data\result\albRules;
use AlibabaCloud\SDK\Sae\V20190506\Models\ListGreyTagRouteResponseBody\data\result\dubboRules;
use AlibabaCloud\SDK\Sae\V20190506\Models\ListGreyTagRouteResponseBody\data\result\scRules;

class result extends Model
{
    /**
     * @var albRules[]
     */
    public $albRules;

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
        'albRules' => 'AlbRules',
        'createTime' => 'CreateTime',
        'description' => 'Description',
        'dubboRules' => 'DubboRules',
        'greyTagRouteId' => 'GreyTagRouteId',
        'name' => 'Name',
        'scRules' => 'ScRules',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        if (\is_array($this->albRules)) {
            Model::validateArray($this->albRules);
        }
        if (\is_array($this->dubboRules)) {
            Model::validateArray($this->dubboRules);
        }
        if (\is_array($this->scRules)) {
            Model::validateArray($this->scRules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->albRules) {
            if (\is_array($this->albRules)) {
                $res['AlbRules'] = [];
                $n1 = 0;
                foreach ($this->albRules as $item1) {
                    $res['AlbRules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->dubboRules) {
            if (\is_array($this->dubboRules)) {
                $res['DubboRules'] = [];
                $n1 = 0;
                foreach ($this->dubboRules as $item1) {
                    $res['DubboRules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
            if (\is_array($this->scRules)) {
                $res['ScRules'] = [];
                $n1 = 0;
                foreach ($this->scRules as $item1) {
                    $res['ScRules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['AlbRules'])) {
            if (!empty($map['AlbRules'])) {
                $model->albRules = [];
                $n1 = 0;
                foreach ($map['AlbRules'] as $item1) {
                    $model->albRules[$n1] = albRules::fromMap($item1);
                    ++$n1;
                }
            }
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
                $n1 = 0;
                foreach ($map['DubboRules'] as $item1) {
                    $model->dubboRules[$n1] = dubboRules::fromMap($item1);
                    ++$n1;
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
                $n1 = 0;
                foreach ($map['ScRules'] as $item1) {
                    $model->scRules[$n1] = scRules::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
