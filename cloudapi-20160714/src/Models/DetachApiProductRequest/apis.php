<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DetachApiProductRequest;

use AlibabaCloud\Tea\Model;

class apis extends Model
{
    /**
     * @description The API ID.
     *
     * @example ba84c55eca46488598da17c0609f3ead
     *
     * @var string
     */
    public $apiId;

    /**
     * @description The environment to which the API is published. Valid values:
     *
     *   **RELEASE**: the production environment
     *   **PRE**: the pre-release environment
     *   **TEST**: the test environment
     *
     * @example RELEASE
     *
     * @var string
     */
    public $stageName;
    protected $_name = [
        'apiId'     => 'ApiId',
        'stageName' => 'StageName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }
        if (null !== $this->stageName) {
            $res['StageName'] = $this->stageName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return apis
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }
        if (isset($map['StageName'])) {
            $model->stageName = $map['StageName'];
        }

        return $model;
    }
}
