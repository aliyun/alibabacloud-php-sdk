<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class GetEditingProjectRequest extends Model
{
    /**
     * @example ****fb2101bf24b2754cb318787dc****
     *
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $requestSource;
    protected $_name = [
        'projectId'     => 'ProjectId',
        'requestSource' => 'RequestSource',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->requestSource) {
            $res['RequestSource'] = $this->requestSource;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetEditingProjectRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['RequestSource'])) {
            $model->requestSource = $map['RequestSource'];
        }

        return $model;
    }
}
