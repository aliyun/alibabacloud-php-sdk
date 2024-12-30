<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\ModifyApsSlsADBJobRequest;

use AlibabaCloud\Tea\Model;

class columns extends Model
{
    /**
     * @example map_name
     *
     * @var string
     */
    public $mapName;

    /**
     * @example bigint
     *
     * @var string
     */
    public $mapType;

    /**
     * @example test_name
     *
     * @var string
     */
    public $name;

    /**
     * @example bigint
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'mapName' => 'MapName',
        'mapType' => 'MapType',
        'name'    => 'Name',
        'type'    => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mapName) {
            $res['MapName'] = $this->mapName;
        }
        if (null !== $this->mapType) {
            $res['MapType'] = $this->mapType;
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
     * @return columns
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MapName'])) {
            $model->mapName = $map['MapName'];
        }
        if (isset($map['MapType'])) {
            $model->mapType = $map['MapType'];
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
