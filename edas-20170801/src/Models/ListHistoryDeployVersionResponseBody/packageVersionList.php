<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListHistoryDeployVersionResponseBody;

use AlibabaCloud\SDK\Edas\V20170801\Models\ListHistoryDeployVersionResponseBody\packageVersionList\packageVersion;
use AlibabaCloud\Tea\Model;

class packageVersionList extends Model
{
    /**
     * @var packageVersion[]
     */
    public $packageVersion;
    protected $_name = [
        'packageVersion' => 'PackageVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->packageVersion) {
            $res['PackageVersion'] = [];
            if (null !== $this->packageVersion && \is_array($this->packageVersion)) {
                $n = 0;
                foreach ($this->packageVersion as $item) {
                    $res['PackageVersion'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return packageVersionList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PackageVersion'])) {
            if (!empty($map['PackageVersion'])) {
                $model->packageVersion = [];
                $n                     = 0;
                foreach ($map['PackageVersion'] as $item) {
                    $model->packageVersion[$n++] = null !== $item ? packageVersion::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
