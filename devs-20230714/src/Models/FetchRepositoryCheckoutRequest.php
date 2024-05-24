<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Tea\Model;

class FetchRepositoryCheckoutRequest extends Model
{
    /**
     * @example main
     *
     * @var string
     */
    public $branch;

    /**
     * @example 8828d0087db4210bb1bfeadba90ae52f2938431d
     *
     * @var string
     */
    public $commit;

    /**
     * @example v1.31.0-alpha.0
     *
     * @var string
     */
    public $tag;
    protected $_name = [
        'branch' => 'branch',
        'commit' => 'commit',
        'tag'    => 'tag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->branch) {
            $res['branch'] = $this->branch;
        }
        if (null !== $this->commit) {
            $res['commit'] = $this->commit;
        }
        if (null !== $this->tag) {
            $res['tag'] = $this->tag;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FetchRepositoryCheckoutRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['branch'])) {
            $model->branch = $map['branch'];
        }
        if (isset($map['commit'])) {
            $model->commit = $map['commit'];
        }
        if (isset($map['tag'])) {
            $model->tag = $map['tag'];
        }

        return $model;
    }
}
