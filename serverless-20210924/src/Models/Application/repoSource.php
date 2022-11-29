<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Serverless\V20210924\Models\Application;

use AlibabaCloud\Tea\Model;

class repoSource extends Model
{
    /**
     * @var string
     */
    public $owner;

    /**
     * @var string
     */
    public $provider;

    /**
     * @var string
     */
    public $repo;
    protected $_name = [
        'owner'    => 'owner',
        'provider' => 'provider',
        'repo'     => 'repo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->owner) {
            $res['owner'] = $this->owner;
        }
        if (null !== $this->provider) {
            $res['provider'] = $this->provider;
        }
        if (null !== $this->repo) {
            $res['repo'] = $this->repo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return repoSource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['owner'])) {
            $model->owner = $map['owner'];
        }
        if (isset($map['provider'])) {
            $model->provider = $map['provider'];
        }
        if (isset($map['repo'])) {
            $model->repo = $map['repo'];
        }

        return $model;
    }
}
