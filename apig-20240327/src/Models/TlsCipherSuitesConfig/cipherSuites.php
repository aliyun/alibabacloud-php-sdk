<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\TlsCipherSuitesConfig;

use AlibabaCloud\Tea\Model;

class cipherSuites extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string[]
     */
    public $supportVersions;
    protected $_name = [
        'name'            => 'name',
        'supportVersions' => 'supportVersions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->supportVersions) {
            $res['supportVersions'] = $this->supportVersions;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cipherSuites
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['supportVersions'])) {
            if (!empty($map['supportVersions'])) {
                $model->supportVersions = $map['supportVersions'];
            }
        }

        return $model;
    }
}
