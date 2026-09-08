<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20260120\Models\ListMiniEngineVersionsResponseBody;

use AlibabaCloud\Dara\Model;

class kernelVersions extends Model
{
    /**
     * @var string
     */
    public $kernelReleaseType;

    /**
     * @var string
     */
    public $kernelVersion;

    /**
     * @var string
     */
    public $kernelVersionName;
    protected $_name = [
        'kernelReleaseType' => 'KernelReleaseType',
        'kernelVersion' => 'KernelVersion',
        'kernelVersionName' => 'KernelVersionName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->kernelReleaseType) {
            $res['KernelReleaseType'] = $this->kernelReleaseType;
        }

        if (null !== $this->kernelVersion) {
            $res['KernelVersion'] = $this->kernelVersion;
        }

        if (null !== $this->kernelVersionName) {
            $res['KernelVersionName'] = $this->kernelVersionName;
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
        if (isset($map['KernelReleaseType'])) {
            $model->kernelReleaseType = $map['KernelReleaseType'];
        }

        if (isset($map['KernelVersion'])) {
            $model->kernelVersion = $map['KernelVersion'];
        }

        if (isset($map['KernelVersionName'])) {
            $model->kernelVersionName = $map['KernelVersionName'];
        }

        return $model;
    }
}
