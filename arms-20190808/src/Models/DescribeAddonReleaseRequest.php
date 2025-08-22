<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;

class DescribeAddonReleaseRequest extends Model
{
    /**
     * @var string
     */
    public $environmentId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $releaseName;
    protected $_name = [
        'environmentId' => 'EnvironmentId',
        'regionId' => 'RegionId',
        'releaseName' => 'ReleaseName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->environmentId) {
            $res['EnvironmentId'] = $this->environmentId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->releaseName) {
            $res['ReleaseName'] = $this->releaseName;
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
        if (isset($map['EnvironmentId'])) {
            $model->environmentId = $map['EnvironmentId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ReleaseName'])) {
            $model->releaseName = $map['ReleaseName'];
        }

        return $model;
    }
}
