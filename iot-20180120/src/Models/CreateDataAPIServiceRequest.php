<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\SDK\Iot\V20180120\Models\CreateDataAPIServiceRequest\requestParam;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateDataAPIServiceRequest\responseParam;
use AlibabaCloud\Tea\Model;

class CreateDataAPIServiceRequest extends Model
{
    /**
     * @example device/getDeviceCountByStatus
     *
     * @var string
     */
    public $apiPath;

    /**
     * @var string
     */
    public $desc;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @example iot_instc_pu****_c*-v64********
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @example SELECT COUNT(iot_id) AS deviceCount FROM ${system.device} WHERE status=1
     *
     * @var string
     */
    public $originSql;

    /**
     * @var requestParam[]
     */
    public $requestParam;

    /**
     * @var responseParam[]
     */
    public $responseParam;

    /**
     * @example SELECT COUNT(iot_id) AS deviceCount FROM ${system.device} WHERE status=${status}
     *
     * @var string
     */
    public $templateSql;
    protected $_name = [
        'apiPath'       => 'ApiPath',
        'desc'          => 'Desc',
        'displayName'   => 'DisplayName',
        'iotInstanceId' => 'IotInstanceId',
        'originSql'     => 'OriginSql',
        'requestParam'  => 'RequestParam',
        'responseParam' => 'ResponseParam',
        'templateSql'   => 'TemplateSql',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiPath) {
            $res['ApiPath'] = $this->apiPath;
        }
        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->originSql) {
            $res['OriginSql'] = $this->originSql;
        }
        if (null !== $this->requestParam) {
            $res['RequestParam'] = [];
            if (null !== $this->requestParam && \is_array($this->requestParam)) {
                $n = 0;
                foreach ($this->requestParam as $item) {
                    $res['RequestParam'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->responseParam) {
            $res['ResponseParam'] = [];
            if (null !== $this->responseParam && \is_array($this->responseParam)) {
                $n = 0;
                foreach ($this->responseParam as $item) {
                    $res['ResponseParam'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->templateSql) {
            $res['TemplateSql'] = $this->templateSql;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDataAPIServiceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiPath'])) {
            $model->apiPath = $map['ApiPath'];
        }
        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['OriginSql'])) {
            $model->originSql = $map['OriginSql'];
        }
        if (isset($map['RequestParam'])) {
            if (!empty($map['RequestParam'])) {
                $model->requestParam = [];
                $n                   = 0;
                foreach ($map['RequestParam'] as $item) {
                    $model->requestParam[$n++] = null !== $item ? requestParam::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ResponseParam'])) {
            if (!empty($map['ResponseParam'])) {
                $model->responseParam = [];
                $n                    = 0;
                foreach ($map['ResponseParam'] as $item) {
                    $model->responseParam[$n++] = null !== $item ? responseParam::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TemplateSql'])) {
            $model->templateSql = $map['TemplateSql'];
        }

        return $model;
    }
}
