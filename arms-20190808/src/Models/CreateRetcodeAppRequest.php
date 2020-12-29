<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class CreateRetcodeAppRequest extends Model
{
    /**
     * @var string
     */
    public $retcodeAppName;

    /**
     * @var string
     */
    public $retcodeAppType;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'retcodeAppName' => 'RetcodeAppName',
        'retcodeAppType' => 'RetcodeAppType',
        'regionId'       => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->retcodeAppName) {
            $res['RetcodeAppName'] = $this->retcodeAppName;
        }
        if (null !== $this->retcodeAppType) {
            $res['RetcodeAppType'] = $this->retcodeAppType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRetcodeAppRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RetcodeAppName'])) {
            $model->retcodeAppName = $map['RetcodeAppName'];
        }
        if (isset($map['RetcodeAppType'])) {
            $model->retcodeAppType = $map['RetcodeAppType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
