<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models;

use AlibabaCloud\Tea\Model;

class InstallSoftwaresShrinkRequest extends Model
{
    /**
     * @description The information about the software systems that you want to install.
     *
     * @var string
     */
    public $additionalPackagesShrink;

    /**
     * @description The cluster ID.
     *
     * @example ehpc-hz-FYUr32****
     *
     * @var string
     */
    public $clusterId;
    protected $_name = [
        'additionalPackagesShrink' => 'AdditionalPackages',
        'clusterId'                => 'ClusterId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->additionalPackagesShrink) {
            $res['AdditionalPackages'] = $this->additionalPackagesShrink;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InstallSoftwaresShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdditionalPackages'])) {
            $model->additionalPackagesShrink = $map['AdditionalPackages'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        return $model;
    }
}
