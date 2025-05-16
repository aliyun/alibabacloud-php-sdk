<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\ListSoftwaresResponseBody\additionalPackages\additionalPackageInfos\versions\versionInfos;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20240730\Models\ListSoftwaresResponseBody\additionalPackages\additionalPackageInfos\versions\versionInfos\supportOs\supportOsInfos;

class supportOs extends Model
{
    /**
     * @var supportOsInfos[]
     */
    public $supportOsInfos;
    protected $_name = [
        'supportOsInfos' => 'SupportOsInfos',
    ];

    public function validate()
    {
        if (\is_array($this->supportOsInfos)) {
            Model::validateArray($this->supportOsInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->supportOsInfos) {
            if (\is_array($this->supportOsInfos)) {
                $res['SupportOsInfos'] = [];
                $n1 = 0;
                foreach ($this->supportOsInfos as $item1) {
                    $res['SupportOsInfos'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SupportOsInfos'])) {
            if (!empty($map['SupportOsInfos'])) {
                $model->supportOsInfos = [];
                $n1 = 0;
                foreach ($map['SupportOsInfos'] as $item1) {
                    $model->supportOsInfos[$n1++] = supportOsInfos::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
