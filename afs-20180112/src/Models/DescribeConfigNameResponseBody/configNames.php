<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Afs\V20180112\Models\DescribeConfigNameResponseBody;

use AlibabaCloud\Tea\Model;

class configNames extends Model
{
    /**
     * @var string
     */
    public $configName;

    /**
     * @var string
     */
    public $refExtId;

    /**
     * @var string
     */
    public $aliUid;
    protected $_name = [
        'configName' => 'ConfigName',
        'refExtId'   => 'RefExtId',
        'aliUid'     => 'AliUid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configName) {
            $res['ConfigName'] = $this->configName;
        }
        if (null !== $this->refExtId) {
            $res['RefExtId'] = $this->refExtId;
        }
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return configNames
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigName'])) {
            $model->configName = $map['ConfigName'];
        }
        if (isset($map['RefExtId'])) {
            $model->refExtId = $map['RefExtId'];
        }
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }

        return $model;
    }
}
