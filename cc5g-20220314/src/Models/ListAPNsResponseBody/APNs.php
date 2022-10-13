<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CC5G\V20220314\Models\ListAPNsResponseBody;

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
