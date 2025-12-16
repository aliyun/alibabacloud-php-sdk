<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vs\V20181212\Models\UpdateCloudAppInfoRequest\patch;

class UpdateCloudAppInfoRequest extends Model
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
     * @var patch
     */
    public $patch;

    /**
     * @var string[]
     */
    public $pkgLabels;

    /**
     * @var string
     */
    public $stablePatchId;
    protected $_name = [
        'appId' => 'AppId',
        'description' => 'Description',
        'patch' => 'Patch',
        'pkgLabels' => 'PkgLabels',
        'stablePatchId' => 'StablePatchId',
    ];

    public function validate()
    {
        if (null !== $this->patch) {
            $this->patch->validate();
        }
        if (\is_array($this->pkgLabels)) {
            Model::validateArray($this->pkgLabels);
        }
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

        if (null !== $this->patch) {
            $res['Patch'] = null !== $this->patch ? $this->patch->toArray($noStream) : $this->patch;
        }

        if (null !== $this->pkgLabels) {
            if (\is_array($this->pkgLabels)) {
                $res['PkgLabels'] = [];
                $n1 = 0;
                foreach ($this->pkgLabels as $item1) {
                    $res['PkgLabels'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            $model->patch = patch::fromMap($map['Patch']);
        }

        if (isset($map['PkgLabels'])) {
            if (!empty($map['PkgLabels'])) {
                $model->pkgLabels = [];
                $n1 = 0;
                foreach ($map['PkgLabels'] as $item1) {
                    $model->pkgLabels[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['StablePatchId'])) {
            $model->stablePatchId = $map['StablePatchId'];
        }

        return $model;
    }
}
