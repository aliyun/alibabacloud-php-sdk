<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListHistoryDeployVersionResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListHistoryDeployVersionResponseBody\packageVersionList\packageVersion;

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
        if (\is_array($this->packageVersion)) {
            Model::validateArray($this->packageVersion);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->packageVersion) {
            if (\is_array($this->packageVersion)) {
                $res['PackageVersion'] = [];
                $n1 = 0;
                foreach ($this->packageVersion as $item1) {
                    $res['PackageVersion'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['PackageVersion'])) {
            if (!empty($map['PackageVersion'])) {
                $model->packageVersion = [];
                $n1 = 0;
                foreach ($map['PackageVersion'] as $item1) {
                    $model->packageVersion[$n1] = packageVersion::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
