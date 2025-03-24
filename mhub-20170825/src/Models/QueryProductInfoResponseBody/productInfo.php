<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mhub\V20170825\Models\QueryProductInfoResponseBody;

use AlibabaCloud\Tea\Model;

class productInfo extends Model
{
    /**
     * @var string
     */
    public $encodedIcon;

    /**
     * @var string
     */
    public $iconName;

    /**
     * @example 1
     *
     * @var int
     */
    public $industryId;

    /**
     * @var string
     */
    public $name;

    /**
     * @example false
     *
     * @var bool
     */
    public $readonly;
    protected $_name = [
        'encodedIcon' => 'EncodedIcon',
        'iconName' => 'IconName',
        'industryId' => 'IndustryId',
        'name' => 'Name',
        'readonly' => 'Readonly',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->encodedIcon) {
            $res['EncodedIcon'] = $this->encodedIcon;
        }
        if (null !== $this->iconName) {
            $res['IconName'] = $this->iconName;
        }
        if (null !== $this->industryId) {
            $res['IndustryId'] = $this->industryId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->readonly) {
            $res['Readonly'] = $this->readonly;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return productInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EncodedIcon'])) {
            $model->encodedIcon = $map['EncodedIcon'];
        }
        if (isset($map['IconName'])) {
            $model->iconName = $map['IconName'];
        }
        if (isset($map['IndustryId'])) {
            $model->industryId = $map['IndustryId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Readonly'])) {
            $model->readonly = $map['Readonly'];
        }

        return $model;
    }
}
