<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;

class DescribeEnvCustomJobRequest extends Model
{
    /**
     * @var string
     */
    public $customJobName;

    /**
     * @var bool
     */
    public $encryptYaml;

    /**
     * @var string
     */
    public $environmentId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'customJobName' => 'CustomJobName',
        'encryptYaml' => 'EncryptYaml',
        'environmentId' => 'EnvironmentId',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customJobName) {
            $res['CustomJobName'] = $this->customJobName;
        }

        if (null !== $this->encryptYaml) {
            $res['EncryptYaml'] = $this->encryptYaml;
        }

        if (null !== $this->environmentId) {
            $res['EnvironmentId'] = $this->environmentId;
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
        if (isset($map['CustomJobName'])) {
            $model->customJobName = $map['CustomJobName'];
        }

        if (isset($map['EncryptYaml'])) {
            $model->encryptYaml = $map['EncryptYaml'];
        }

        if (isset($map['EnvironmentId'])) {
            $model->environmentId = $map['EnvironmentId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
