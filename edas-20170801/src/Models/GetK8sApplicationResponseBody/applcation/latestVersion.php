<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetK8sApplicationResponseBody\applcation;

use AlibabaCloud\Dara\Model;

class latestVersion extends Model
{
    /**
     * @var string
     */
    public $packageVersion;

    /**
     * @var string
     */
    public $url;

    /**
     * @var string
     */
    public $warUrl;
    protected $_name = [
        'packageVersion' => 'PackageVersion',
        'url' => 'Url',
        'warUrl' => 'WarUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->packageVersion) {
            $res['PackageVersion'] = $this->packageVersion;
        }

        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        if (null !== $this->warUrl) {
            $res['WarUrl'] = $this->warUrl;
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
            $model->packageVersion = $map['PackageVersion'];
        }

        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        if (isset($map['WarUrl'])) {
            $model->warUrl = $map['WarUrl'];
        }

        return $model;
    }
}
