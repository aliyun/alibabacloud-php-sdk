<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IoTCC\V20210513\Models\ListAPNsResponseBody;

use AlibabaCloud\Tea\Model;

class APNs extends Model
{
    /**
     * @var string
     */
    public $APN;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string[]
     */
    public $featureList;

    /**
     * @var string
     */
    public $ISP;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string[]
     */
    public $zoneList;
    protected $_name = [
        'APN'         => 'APN',
        'description' => 'Description',
        'featureList' => 'FeatureList',
        'ISP'         => 'ISP',
        'name'        => 'Name',
        'zoneList'    => 'ZoneList',
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
        if (null !== $this->featureList) {
            $res['FeatureList'] = $this->featureList;
        }
        if (null !== $this->ISP) {
            $res['ISP'] = $this->ISP;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->zoneList) {
            $res['ZoneList'] = $this->zoneList;
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
        if (isset($map['FeatureList'])) {
            if (!empty($map['FeatureList'])) {
                $model->featureList = $map['FeatureList'];
            }
        }
        if (isset($map['ISP'])) {
            $model->ISP = $map['ISP'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ZoneList'])) {
            if (!empty($map['ZoneList'])) {
                $model->zoneList = $map['ZoneList'];
            }
        }

        return $model;
    }
}
