<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models;

use AlibabaCloud\Dara\Model;

class UninstallSoftwaresShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $additionalPackagesShrink;
    /**
     * @var string
     */
    public $clusterId;
    protected $_name = [
        'additionalPackagesShrink' => 'AdditionalPackages',
        'clusterId'                => 'ClusterId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
