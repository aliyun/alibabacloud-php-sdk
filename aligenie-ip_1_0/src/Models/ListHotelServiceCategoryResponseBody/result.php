<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelServiceCategoryResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example GOODS
     *
     * @var string
     */
    public $code;

    /**
     * @example 生活及洗漱用品
     *
     * @var string
     */
    public $desc;

    /**
     * @example https://ailabsaicloudservice.alicdn.com/hotel/icon/changjingfenlei/wupintianjia.png
     *
     * @var string
     */
    public $icon;

    /**
     * @example 物品添加
     *
     * @var string
     */
    public $name;

    /**
     * @example HOTEL_SERVICE
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'code' => 'Code',
        'desc' => 'Desc',
        'icon' => 'Icon',
        'name' => 'Name',
        'type' => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
        }
        if (null !== $this->icon) {
            $res['Icon'] = $this->icon;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }
        if (isset($map['Icon'])) {
            $model->icon = $map['Icon'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
