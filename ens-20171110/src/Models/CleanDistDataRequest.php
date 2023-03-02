<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class CleanDistDataRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $dataName;

    /**
     * @var string
     */
    public $dataVersion;

    /**
     * @var string
     */
    public $ensRegionId;
    protected $_name = [
        'appId'       => 'AppId',
        'dataName'    => 'DataName',
        'dataVersion' => 'DataVersion',
        'ensRegionId' => 'EnsRegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->dataName) {
            $res['DataName'] = $this->dataName;
        }
        if (null !== $this->dataVersion) {
            $res['DataVersion'] = $this->dataVersion;
        }
        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CleanDistDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['DataName'])) {
            $model->dataName = $map['DataName'];
        }
        if (isset($map['DataVersion'])) {
            $model->dataVersion = $map['DataVersion'];
        }
        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }

        return $model;
    }
}
