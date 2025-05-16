<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\ListInstalledSoftwaresResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20240730\Models\ListInstalledSoftwaresResponseBody\additionalPackages\additionalPackageInfos;

class additionalPackages extends Model
{
    /**
     * @var additionalPackageInfos[]
     */
    public $additionalPackageInfos;
    protected $_name = [
        'additionalPackageInfos' => 'AdditionalPackageInfos',
    ];

    public function validate()
    {
        if (\is_array($this->additionalPackageInfos)) {
            Model::validateArray($this->additionalPackageInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->additionalPackageInfos) {
            if (\is_array($this->additionalPackageInfos)) {
                $res['AdditionalPackageInfos'] = [];
                $n1 = 0;
                foreach ($this->additionalPackageInfos as $item1) {
                    $res['AdditionalPackageInfos'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AdditionalPackageInfos'])) {
            if (!empty($map['AdditionalPackageInfos'])) {
                $model->additionalPackageInfos = [];
                $n1 = 0;
                foreach ($map['AdditionalPackageInfos'] as $item1) {
                    $model->additionalPackageInfos[$n1++] = additionalPackageInfos::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
