<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;

class InstallCmsExporterRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;
    /**
     * @var string
     */
    public $cmsArgs;
    /**
     * @var string
     */
    public $directArgs;
    /**
     * @var bool
     */
    public $enableTag;
    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'clusterId'  => 'ClusterId',
        'cmsArgs'    => 'CmsArgs',
        'directArgs' => 'DirectArgs',
        'enableTag'  => 'EnableTag',
        'regionId'   => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->cmsArgs) {
            $res['CmsArgs'] = $this->cmsArgs;
        }

        if (null !== $this->directArgs) {
            $res['DirectArgs'] = $this->directArgs;
        }

        if (null !== $this->enableTag) {
            $res['EnableTag'] = $this->enableTag;
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
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['CmsArgs'])) {
            $model->cmsArgs = $map['CmsArgs'];
        }

        if (isset($map['DirectArgs'])) {
            $model->directArgs = $map['DirectArgs'];
        }

        if (isset($map['EnableTag'])) {
            $model->enableTag = $map['EnableTag'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
