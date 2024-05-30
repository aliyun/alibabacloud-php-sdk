<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Tea\Model;

class UpdateFlowJSONAssetRequest extends Model
{
    /**
     * @example 9399393
     *
     * @var string
     */
    public $custSpaceId;

    /**
     * @description This parameter is required.
     *
     * @example https://aliyun/json.json
     *
     * @var string
     */
    public $filePath;

    /**
     * @description Flow ID。
     *
     * This parameter is required.
     * @example flow_001
     *
     * @var string
     */
    public $flowId;
    protected $_name = [
        'custSpaceId' => 'CustSpaceId',
        'filePath'    => 'FilePath',
        'flowId'      => 'FlowId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->custSpaceId) {
            $res['CustSpaceId'] = $this->custSpaceId;
        }
        if (null !== $this->filePath) {
            $res['FilePath'] = $this->filePath;
        }
        if (null !== $this->flowId) {
            $res['FlowId'] = $this->flowId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateFlowJSONAssetRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustSpaceId'])) {
            $model->custSpaceId = $map['CustSpaceId'];
        }
        if (isset($map['FilePath'])) {
            $model->filePath = $map['FilePath'];
        }
        if (isset($map['FlowId'])) {
            $model->flowId = $map['FlowId'];
        }

        return $model;
    }
}
