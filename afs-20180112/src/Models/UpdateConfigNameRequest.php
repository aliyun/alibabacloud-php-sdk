<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Afs\V20180112\Models;

use AlibabaCloud\Tea\Model;

class UpdateConfigNameRequest extends Model
{
    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $refExtId;

    /**
     * @var string
     */
    public $configName;
    protected $_name = [
        'sourceIp'   => 'SourceIp',
        'lang'       => 'Lang',
        'refExtId'   => 'RefExtId',
        'configName' => 'ConfigName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->refExtId) {
            $res['RefExtId'] = $this->refExtId;
        }
        if (null !== $this->configName) {
            $res['ConfigName'] = $this->configName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateConfigNameRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['RefExtId'])) {
            $model->refExtId = $map['RefExtId'];
        }
        if (isset($map['ConfigName'])) {
            $model->configName = $map['ConfigName'];
        }

        return $model;
    }
}
