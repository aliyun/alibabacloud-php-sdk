<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeNamespaceScopeSidecarConfigResponseBody\configPatches;

use AlibabaCloud\Tea\Model;

class tracing extends Model
{
    /**
     * @description The custom tags added to reported spans. The key of a tag is of the string type. The value of a tag is in the JSON format. A custom tag can belong to one of the following types:
     *
     *   `literal`: The tag value is a fixed value in the JSON format. This tag must contain the `value` field that specifies a literal. Example: `{"value":"test"}`.
     *
     * <!---->
     *
     *   `header`: The tag value is a request header in the JSON format. This tag must contain the `name` field and `defaultValue` field.The name field indicates the name of the request header. The defaultValue field indicates the default value that is used when no request header is available. Example: `{"name":"test","defaultValue":"test"}`.
     *   `environment`: The tag value is an environment variable in the JSON format. This tag must contain the `name` field and `defaultValue` field. The name field indicates the name of the environment variable. The defaultValue field indicates the environment variable that is used when no environment variable is available. Example: `{"name":"test","defaultValue":"test"}`.
     *
     * @var mixed[]
     */
    public $customTags;

    /**
     * @description The maximum tag length.
     *
     * @var int
     */
    public $maxPathTagLength;

    /**
     * @description The sampling rate.
     *
     * @var float
     */
    public $sampling;
    protected $_name = [
        'customTags'       => 'CustomTags',
        'maxPathTagLength' => 'MaxPathTagLength',
        'sampling'         => 'Sampling',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customTags) {
            $res['CustomTags'] = $this->customTags;
        }
        if (null !== $this->maxPathTagLength) {
            $res['MaxPathTagLength'] = $this->maxPathTagLength;
        }
        if (null !== $this->sampling) {
            $res['Sampling'] = $this->sampling;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tracing
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomTags'])) {
            $model->customTags = $map['CustomTags'];
        }
        if (isset($map['MaxPathTagLength'])) {
            $model->maxPathTagLength = $map['MaxPathTagLength'];
        }
        if (isset($map['Sampling'])) {
            $model->sampling = $map['Sampling'];
        }

        return $model;
    }
}
