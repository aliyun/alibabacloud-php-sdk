<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateDataAPIServiceRequest\requestParam;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateDataAPIServiceRequest\responseParam;

class CreateDataAPIServiceRequest extends Model
{
    /**
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
     * @var string
     */
    public $iotInstanceId;

    /**
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
     * @var string
     */
    public $templateSql;
    protected $_name = [
        'apiPath' => 'ApiPath',
        'desc' => 'Desc',
        'displayName' => 'DisplayName',
        'iotInstanceId' => 'IotInstanceId',
        'originSql' => 'OriginSql',
        'requestParam' => 'RequestParam',
        'responseParam' => 'ResponseParam',
        'templateSql' => 'TemplateSql',
    ];

    public function validate()
    {
        if (\is_array($this->requestParam)) {
            Model::validateArray($this->requestParam);
        }
        if (\is_array($this->responseParam)) {
            Model::validateArray($this->responseParam);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->requestParam)) {
                $res['RequestParam'] = [];
                $n1 = 0;
                foreach ($this->requestParam as $item1) {
                    $res['RequestParam'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->responseParam) {
            if (\is_array($this->responseParam)) {
                $res['ResponseParam'] = [];
                $n1 = 0;
                foreach ($this->responseParam as $item1) {
                    $res['ResponseParam'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->templateSql) {
            $res['TemplateSql'] = $this->templateSql;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['RequestParam'] as $item1) {
                    $model->requestParam[$n1] = requestParam::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ResponseParam'])) {
            if (!empty($map['ResponseParam'])) {
                $model->responseParam = [];
                $n1 = 0;
                foreach ($map['ResponseParam'] as $item1) {
                    $model->responseParam[$n1] = responseParam::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TemplateSql'])) {
            $model->templateSql = $map['TemplateSql'];
        }

        return $model;
    }
}
