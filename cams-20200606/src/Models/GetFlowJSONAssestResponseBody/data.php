<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\GetFlowJSONAssestResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example https://url.com/json.json
     *
     * @var string
     */
    public $filePath;

    /**
     * @description flow ID。
     *
     * @example flow_id_arms
     *
     * @var string
     */
    public $flowId;
    protected $_name = [
        'filePath' => 'FilePath',
        'flowId'   => 'FlowId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FilePath'])) {
            $model->filePath = $map['FilePath'];
        }
        if (isset($map['FlowId'])) {
            $model->flowId = $map['FlowId'];
        }

        return $model;
    }
}
