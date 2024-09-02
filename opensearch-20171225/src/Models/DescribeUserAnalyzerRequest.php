<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models;

use AlibabaCloud\Tea\Model;

class DescribeUserAnalyzerRequest extends Model
{
    /**
     * @description The Associated information,output properties based on hierarchy.
     * **all**: Outputs associated app information
     *
     * @example all
     *
     * @var string
     */
    public $with;
    protected $_name = [
        'with' => 'with',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->with) {
            $res['with'] = $this->with;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeUserAnalyzerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['with'])) {
            $model->with = $map['with'];
        }

        return $model;
    }
}
