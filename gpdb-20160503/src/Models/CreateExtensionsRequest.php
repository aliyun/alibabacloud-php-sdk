<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Dara\Model;

class CreateExtensionsRequest extends Model
{
    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $DBNames;

    /**
     * @var string
     */
    public $extensions;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'DBInstanceId' => 'DBInstanceId',
        'DBNames' => 'DBNames',
        'extensions' => 'Extensions',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }

        if (null !== $this->DBNames) {
            $res['DBNames'] = $this->DBNames;
        }

        if (null !== $this->extensions) {
            $res['Extensions'] = $this->extensions;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }

        if (isset($map['DBNames'])) {
            $model->DBNames = $map['DBNames'];
        }

        if (isset($map['Extensions'])) {
            $model->extensions = $map['Extensions'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
