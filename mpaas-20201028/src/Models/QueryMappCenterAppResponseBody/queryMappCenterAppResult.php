<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models\QueryMappCenterAppResponseBody;

use AlibabaCloud\SDK\MPaaS\V20201028\Models\QueryMappCenterAppResponseBody\queryMappCenterAppResult\mappCenterApp;
use AlibabaCloud\Tea\Model;

class queryMappCenterAppResult extends Model
{
    /**
     * @var mappCenterApp
     */
    public $mappCenterApp;

    /**
     * @var string
     */
    public $resultMsg;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'mappCenterApp' => 'MappCenterApp',
        'resultMsg'     => 'ResultMsg',
        'success'       => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mappCenterApp) {
            $res['MappCenterApp'] = null !== $this->mappCenterApp ? $this->mappCenterApp->toMap() : null;
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
     * @return queryMappCenterAppResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MappCenterApp'])) {
            $model->mappCenterApp = mappCenterApp::fromMap($map['MappCenterApp']);
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
