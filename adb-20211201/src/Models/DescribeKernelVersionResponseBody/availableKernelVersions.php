<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeKernelVersionResponseBody;

use AlibabaCloud\Dara\Model;

class availableKernelVersions extends Model
{
    /**
     * @var string
     */
    public $expireDate;
    /**
     * @var string
     */
    public $kernelVersion;
    /**
     * @var string
     */
    public $releaseDate;
    protected $_name = [
        'expireDate'    => 'ExpireDate',
        'kernelVersion' => 'KernelVersion',
        'releaseDate'   => 'ReleaseDate',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->expireDate) {
            $res['ExpireDate'] = $this->expireDate;
        }

        if (null !== $this->kernelVersion) {
            $res['KernelVersion'] = $this->kernelVersion;
        }

        if (null !== $this->releaseDate) {
            $res['ReleaseDate'] = $this->releaseDate;
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
        if (isset($map['ExpireDate'])) {
            $model->expireDate = $map['ExpireDate'];
        }

        if (isset($map['KernelVersion'])) {
            $model->kernelVersion = $map['KernelVersion'];
        }

        if (isset($map['ReleaseDate'])) {
            $model->releaseDate = $map['ReleaseDate'];
        }

        return $model;
    }
}
