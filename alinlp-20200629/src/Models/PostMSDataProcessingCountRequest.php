<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alinlp\V20200629\Models;

use AlibabaCloud\Tea\Model;

class PostMSDataProcessingCountRequest extends Model
{
    /**
     * @var string[]
     */
    public $dataIds;

    /**
     * @example 103654
     *
     * @var int
     */
    public $dataImportId;

    /**
     * @example 325
     *
     * @var int
     */
    public $serviceId;

    /**
     * @var string
     */
    public $xDashScopeOpenAPISource;
    protected $_name = [
        'dataIds'                 => 'DataIds',
        'dataImportId'            => 'DataImportId',
        'serviceId'               => 'ServiceId',
        'xDashScopeOpenAPISource' => 'X-DashScope-OpenAPISource',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataIds) {
            $res['DataIds'] = $this->dataIds;
        }
        if (null !== $this->dataImportId) {
            $res['DataImportId'] = $this->dataImportId;
        }
        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }
        if (null !== $this->xDashScopeOpenAPISource) {
            $res['X-DashScope-OpenAPISource'] = $this->xDashScopeOpenAPISource;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PostMSDataProcessingCountRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataIds'])) {
            if (!empty($map['DataIds'])) {
                $model->dataIds = $map['DataIds'];
            }
        }
        if (isset($map['DataImportId'])) {
            $model->dataImportId = $map['DataImportId'];
        }
        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }
        if (isset($map['X-DashScope-OpenAPISource'])) {
            $model->xDashScopeOpenAPISource = $map['X-DashScope-OpenAPISource'];
        }

        return $model;
    }
}
