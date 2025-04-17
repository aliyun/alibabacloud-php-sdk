<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

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
        'bucket' => 'Bucket',
        'matchExpressions' => 'MatchExpressions',
        'prefix' => 'Prefix',
    ];

    public function validate()
    {
        if (\is_array($this->matchExpressions)) {
            Model::validateArray($this->matchExpressions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bucket) {
            $res['Bucket'] = $this->bucket;
        }

        if (null !== $this->matchExpressions) {
            if (\is_array($this->matchExpressions)) {
                $res['MatchExpressions'] = [];
                $n1 = 0;
                foreach ($this->matchExpressions as $item1) {
                    $res['MatchExpressions'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->prefix) {
            $res['Prefix'] = $this->prefix;
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
        if (isset($map['Bucket'])) {
            $model->bucket = $map['Bucket'];
        }

        if (isset($map['MatchExpressions'])) {
            if (!empty($map['MatchExpressions'])) {
                $model->matchExpressions = [];
                $n1 = 0;
                foreach ($map['MatchExpressions'] as $item1) {
                    $model->matchExpressions[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Prefix'])) {
            $model->prefix = $map['Prefix'];
        }

        return $model;
    }
}
