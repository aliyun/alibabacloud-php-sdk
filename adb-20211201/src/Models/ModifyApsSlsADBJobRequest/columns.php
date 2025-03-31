<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\ModifyApsSlsADBJobRequest;

use AlibabaCloud\Dara\Model;

class columns extends Model
{
    /**
     * @var string
     */
    public $mapName;

    /**
     * @var string
     */
    public $mapType;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'mapName' => 'MapName',
        'mapType' => 'MapType',
        'name' => 'Name',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
