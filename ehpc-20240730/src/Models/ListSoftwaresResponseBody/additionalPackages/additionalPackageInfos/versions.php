<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\ListSoftwaresResponseBody\additionalPackages\additionalPackageInfos;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20240730\Models\ListSoftwaresResponseBody\additionalPackages\additionalPackageInfos\versions\versionInfos;

class versions extends Model
{
    /**
     * @var versionInfos[]
     */
    public $versionInfos;
    protected $_name = [
        'versionInfos' => 'VersionInfos',
    ];

    public function validate()
    {
        if (\is_array($this->versionInfos)) {
            Model::validateArray($this->versionInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->versionInfos) {
            if (\is_array($this->versionInfos)) {
                $res['VersionInfos'] = [];
                $n1                  = 0;
                foreach ($this->versionInfos as $item1) {
                    $res['VersionInfos'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['VersionInfos'])) {
            if (!empty($map['VersionInfos'])) {
                $model->versionInfos = [];
                $n1                  = 0;
                foreach ($map['VersionInfos'] as $item1) {
                    $model->versionInfos[$n1++] = versionInfos::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
