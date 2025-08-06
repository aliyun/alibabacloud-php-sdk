<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\EditAppInfoRequest;

use AlibabaCloud\Dara\Model;

class platforms extends Model
{
    /**
     * @var string
     */
    public $pkgName;

    /**
     * @var string
     */
    public $pkgSignature;

    /**
     * @var int
     */
    public $platformType;
    protected $_name = [
        'pkgName' => 'PkgName',
        'pkgSignature' => 'PkgSignature',
        'platformType' => 'PlatformType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pkgName) {
            $res['PkgName'] = $this->pkgName;
        }

        if (null !== $this->pkgSignature) {
            $res['PkgSignature'] = $this->pkgSignature;
        }

        if (null !== $this->platformType) {
            $res['PlatformType'] = $this->platformType;
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
        if (isset($map['PkgName'])) {
            $model->pkgName = $map['PkgName'];
        }

        if (isset($map['PkgSignature'])) {
            $model->pkgSignature = $map['PkgSignature'];
        }

        if (isset($map['PlatformType'])) {
            $model->platformType = $map['PlatformType'];
        }

        return $model;
    }
}
