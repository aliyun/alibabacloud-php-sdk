<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models\ExportMappCenterAppConfigResponseBody;

use AlibabaCloud\Tea\Model;

class exportMappCenterAppConfigResult extends Model
{
    /**
     * @var string
     */
    public $configDownloadUrl;

    /**
     * @var string
     */
    public $resultMsg;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'configDownloadUrl' => 'ConfigDownloadUrl',
        'resultMsg'         => 'ResultMsg',
        'success'           => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configDownloadUrl) {
            $res['ConfigDownloadUrl'] = $this->configDownloadUrl;
        }
        if (null !== $this->resultMsg) {
            $res['ResultMsg'] = $this->resultMsg;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return exportMappCenterAppConfigResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigDownloadUrl'])) {
            $model->configDownloadUrl = $map['ConfigDownloadUrl'];
        }
        if (isset($map['ResultMsg'])) {
            $model->resultMsg = $map['ResultMsg'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
