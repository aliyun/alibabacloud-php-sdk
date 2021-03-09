<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\SDK\Iot\V20180120\Models\CreateDataAPIServiceRequest\requestParam;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateDataAPIServiceRequest\responseParam;
use AlibabaCloud\Tea\Model;

class CreateDataAPIServiceRequest extends Model
{
    /**
     * @var string
     */
    public $apiProduct;

    /**
     * @var string
     */
    public $apiRevision;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $originSql;

    /**
     * @var requestParam[]
     */
    public $requestParam;

    /**
     * @var string
     */
    public $desc;

    /**
     * @var responseParam[]
     */
    public $responseParam;

    /**
     * @var string
     */
    public $templateSql;

    /**
     * @var string
     */
    public $apiPath;

    /**
     * @var string
     */
    public $iotInstanceId;
    protected $_name = [
        'apiProduct'    => 'ApiProduct',
        'apiRevision'   => 'ApiRevision',
        'displayName'   => 'DisplayName',
        'originSql'     => 'OriginSql',
        'requestParam'  => 'RequestParam',
        'desc'          => 'Desc',
        'responseParam' => 'ResponseParam',
        'templateSql'   => 'TemplateSql',
        'apiPath'       => 'ApiPath',
        'iotInstanceId' => 'IotInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiProduct) {
            $res['ApiProduct'] = $this->apiProduct;
        }
        if (null !== $this->apiRevision) {
            $res['ApiRevision'] = $this->apiRevision;
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
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
        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
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
        if (null !== $this->apiPath) {
            $res['ApiPath'] = $this->apiPath;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
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
        if (isset($map['ApiProduct'])) {
            $model->apiProduct = $map['ApiProduct'];
        }
        if (isset($map['ApiRevision'])) {
            $model->apiRevision = $map['ApiRevision'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
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
        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
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
        if (isset($map['ApiPath'])) {
            $model->apiPath = $map['ApiPath'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }

        return $model;
    }
}
