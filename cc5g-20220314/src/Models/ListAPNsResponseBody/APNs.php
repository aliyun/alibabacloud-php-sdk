<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CC5G\V20220314\Models\ListAPNsResponseBody;

use AlibabaCloud\Tea\Model;

class APNs extends Model
{
    /**
     * @description apn
     *
     * @example zjhzaliyun01s.5gjs.njiot
     *
     * @var string
     */
    public $APN;

    /**
     * @example uis
     *
     * @var string
     */
    public $description;

    /**
     * @description 代表资源一级ID的资源属性字段
     *
     * @example unicom
     *
     * @var string
     */
    public $ISP;

    /**
     * @description 代表创建时间的资源属性字段
     *
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @var string[]
     */
    public $zones;
    protected $_name = [
        'APN'         => 'APN',
        'description' => 'Description',
        'ISP'         => 'ISP',
        'name'        => 'Name',
        'zones'       => 'Zones',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->APN) {
            $res['APN'] = $this->APN;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->ISP) {
            $res['ISP'] = $this->ISP;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->zones) {
            $res['Zones'] = $this->zones;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return APNs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['APN'])) {
            $model->APN = $map['APN'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ISP'])) {
            $model->ISP = $map['ISP'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Zones'])) {
            if (!empty($map['Zones'])) {
                $model->zones = $map['Zones'];
            }
        }

        return $model;
    }
}
