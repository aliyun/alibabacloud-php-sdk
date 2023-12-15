<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\AttachApiProductRequest;

use AlibabaCloud\Tea\Model;

class apis extends Model
{
    /**
     * @description The API ID.
     *
     * @example 551877242a4b4f3a84a56b7c3570e4a7
     *
     * @var string
     */
    public $apiId;

    /**
     * @description The environment. Valid values:
     *
     *   **RELEASE**: the production environment
     *   **PRE**: the staging environment
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
