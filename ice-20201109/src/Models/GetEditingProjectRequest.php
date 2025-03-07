<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class GetEditingProjectRequest extends Model
{
    /**
     * @description The ID of the online editing project.
     *
     * This parameter is required.
     * @example ****fb2101bf24b2754cb318787dc****
     *
     * @var string
     */
    public $projectId;

    /**
     * @description The ID of the request source. Valid values:
     *
     * \\- WebSDK: If you specify this value, the project timeline is automatically converted into the frontend style, and the materials in the timeline are associated with the project to enable preview by using frontend web SDKs.
     * @example WebSDK
     *
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
