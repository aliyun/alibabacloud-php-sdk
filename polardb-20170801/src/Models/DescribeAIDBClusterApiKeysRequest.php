<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class DescribeAIDBClusterApiKeysRequest extends Model
{
    /**
     * @var string
     */
    public $modelSpaceName;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'modelSpaceName' => 'ModelSpaceName',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->modelSpaceName) {
            $res['ModelSpaceName'] = $this->modelSpaceName;
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
        if (isset($map['ModelSpaceName'])) {
            $model->modelSpaceName = $map['ModelSpaceName'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
