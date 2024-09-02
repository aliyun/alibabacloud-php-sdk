<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models;

use AlibabaCloud\Tea\Model;

class GenerateMergedTableRequest extends Model
{
    /**
     * @description The request body parameters.
     *
     * @var Schema
     */
    public $body;

    /**
     * @description The specifications of the OpenSearch instance. This parameter is used to check whether the OpenSearch instance meets the special limits on an exclusive instance.
     *
     * For more information, see the description of the spec field in the Quota topic.
     * @example "opensearch.share.common"
     *
     * @var string
     */
    public $spec;
    protected $_name = [
        'body' => 'body',
        'spec' => 'spec',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->body) {
            $res['body'] = null !== $this->body ? $this->body->toMap() : null;
        }
        if (null !== $this->spec) {
            $res['spec'] = $this->spec;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenerateMergedTableRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['body'])) {
            $model->body = Schema::fromMap($map['body']);
        }
        if (isset($map['spec'])) {
            $model->spec = $map['spec'];
        }

        return $model;
    }
}
