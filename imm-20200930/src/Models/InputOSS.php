<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class InputOSS extends Model
{
    /**
     * @var string
     */
    public $bucket;

    /**
     * @var string[]
     */
    public $matchExpressions;

    /**
     * @var string
     */
    public $prefix;
    protected $_name = [
        'bucket'           => 'Bucket',
        'matchExpressions' => 'MatchExpressions',
        'prefix'           => 'Prefix',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bucket) {
            $res['Bucket'] = $this->bucket;
        }
        if (null !== $this->matchExpressions) {
            $res['MatchExpressions'] = $this->matchExpressions;
        }
        if (null !== $this->prefix) {
            $res['Prefix'] = $this->prefix;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InputOSS
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bucket'])) {
            $model->bucket = $map['Bucket'];
        }
        if (isset($map['MatchExpressions'])) {
            if (!empty($map['MatchExpressions'])) {
                $model->matchExpressions = $map['MatchExpressions'];
            }
        }
        if (isset($map['Prefix'])) {
            $model->prefix = $map['Prefix'];
        }

        return $model;
    }
}
