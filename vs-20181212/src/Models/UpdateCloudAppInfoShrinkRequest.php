<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Dara\Model;

class UpdateCloudAppInfoShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $patchShrink;

    /**
     * @var string
     */
    public $pkgLabelsShrink;

    /**
     * @var string
     */
    public $stablePatchId;
    protected $_name = [
        'appId' => 'AppId',
        'description' => 'Description',
        'patchShrink' => 'Patch',
        'pkgLabelsShrink' => 'PkgLabels',
        'stablePatchId' => 'StablePatchId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->patchShrink) {
            $res['Patch'] = $this->patchShrink;
        }

        if (null !== $this->pkgLabelsShrink) {
            $res['PkgLabels'] = $this->pkgLabelsShrink;
        }

        if (null !== $this->stablePatchId) {
            $res['StablePatchId'] = $this->stablePatchId;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Patch'])) {
            $model->patchShrink = $map['Patch'];
        }

        if (isset($map['PkgLabels'])) {
            $model->pkgLabelsShrink = $map['PkgLabels'];
        }

        if (isset($map['StablePatchId'])) {
            $model->stablePatchId = $map['StablePatchId'];
        }

        return $model;
    }
}
