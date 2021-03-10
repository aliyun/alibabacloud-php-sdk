<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Afs\V20180112\Models\DescribeAfsConfigNameResponseBody;

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
    public $appKey;

    /**
     * @var string
     */
    public $refExtId;

    /**
     * @var string
     */
    public $aliUid;

    /**
     * @var string
     */
    public $scene;
    protected $_name = [
        'configName' => 'ConfigName',
        'appKey'     => 'AppKey',
        'refExtId'   => 'RefExtId',
        'aliUid'     => 'AliUid',
        'scene'      => 'Scene',
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
        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
        }
        if (null !== $this->refExtId) {
            $res['RefExtId'] = $this->refExtId;
        }
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }
        if (null !== $this->scene) {
            $res['Scene'] = $this->scene;
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
        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }
        if (isset($map['RefExtId'])) {
            $model->refExtId = $map['RefExtId'];
        }
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
        if (isset($map['Scene'])) {
            $model->scene = $map['Scene'];
        }

        return $model;
    }
}
