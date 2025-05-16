<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\ListSoftwaresResponseBody\additionalPackages\additionalPackageInfos\versions;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20240730\Models\ListSoftwaresResponseBody\additionalPackages\additionalPackageInfos\versions\versionInfos\supportOs;

class versionInfos extends Model
{
    /**
     * @var string
     */
    public $latest;

    /**
     * @var supportOs
     */
    public $supportOs;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'latest' => 'Latest',
        'supportOs' => 'SupportOs',
        'version' => 'Version',
    ];

    public function validate()
    {
        if (null !== $this->supportOs) {
            $this->supportOs->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->latest) {
            $res['Latest'] = $this->latest;
        }

        if (null !== $this->supportOs) {
            $res['SupportOs'] = null !== $this->supportOs ? $this->supportOs->toArray($noStream) : $this->supportOs;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['Latest'])) {
            $model->latest = $map['Latest'];
        }

        if (isset($map['SupportOs'])) {
            $model->supportOs = supportOs::fromMap($map['SupportOs']);
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
