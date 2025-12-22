<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models;

use AlibabaCloud\Dara\Model;

class DescribeUserAnalyzerRequest extends Model
{
    /**
     * @var string
     */
    public $with;
    protected $_name = [
        'with' => 'with',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->with) {
            $res['with'] = $this->with;
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
        if (isset($map['with'])) {
            $model->with = $map['with'];
        }

        return $model;
    }
}
