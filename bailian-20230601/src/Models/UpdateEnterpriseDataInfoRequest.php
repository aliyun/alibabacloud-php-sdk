<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20230601\Models;

use AlibabaCloud\Tea\Model;

class UpdateEnterpriseDataInfoRequest extends Model
{
    /**
     * @var string
     */
    public $agentKey;

    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $dataId;

    /**
     * @var string
     */
    public $dataName;

    /**
     * @var string
     */
    public $filePreviewLink;
    protected $_name = [
        'agentKey'        => 'AgentKey',
        'bizId'           => 'BizId',
        'dataId'          => 'DataId',
        'dataName'        => 'DataName',
        'filePreviewLink' => 'FilePreviewLink',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentKey) {
            $res['AgentKey'] = $this->agentKey;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->dataId) {
            $res['DataId'] = $this->dataId;
        }
        if (null !== $this->dataName) {
            $res['DataName'] = $this->dataName;
        }
        if (null !== $this->filePreviewLink) {
            $res['FilePreviewLink'] = $this->filePreviewLink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateEnterpriseDataInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['DataId'])) {
            $model->dataId = $map['DataId'];
        }
        if (isset($map['DataName'])) {
            $model->dataName = $map['DataName'];
        }
        if (isset($map['FilePreviewLink'])) {
            $model->filePreviewLink = $map['FilePreviewLink'];
        }

        return $model;
    }
}
