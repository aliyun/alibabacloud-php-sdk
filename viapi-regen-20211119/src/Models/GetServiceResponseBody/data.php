<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Viapiregen\V20211119\Models\GetServiceResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $errorcodes;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $inputExample;

    /**
     * @var string
     */
    public $inputParams;

    /**
     * @var string
     */
    public $outputExample;

    /**
     * @var string
     */
    public $outputParams;

    /**
     * @var string
     */
    public $serviceDescription;

    /**
     * @var string
     */
    public $serviceId;

    /**
     * @var string
     */
    public $serviceName;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'errorcodes'         => 'Errorcodes',
        'gmtCreate'          => 'GmtCreate',
        'id'                 => 'Id',
        'inputExample'       => 'InputExample',
        'inputParams'        => 'InputParams',
        'outputExample'      => 'OutputExample',
        'outputParams'       => 'OutputParams',
        'serviceDescription' => 'ServiceDescription',
        'serviceId'          => 'ServiceId',
        'serviceName'        => 'ServiceName',
        'status'             => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorcodes) {
            $res['Errorcodes'] = $this->errorcodes;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->inputExample) {
            $res['InputExample'] = $this->inputExample;
        }
        if (null !== $this->inputParams) {
            $res['InputParams'] = $this->inputParams;
        }
        if (null !== $this->outputExample) {
            $res['OutputExample'] = $this->outputExample;
        }
        if (null !== $this->outputParams) {
            $res['OutputParams'] = $this->outputParams;
        }
        if (null !== $this->serviceDescription) {
            $res['ServiceDescription'] = $this->serviceDescription;
        }
        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['Errorcodes'])) {
            $model->errorcodes = $map['Errorcodes'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['InputExample'])) {
            $model->inputExample = $map['InputExample'];
        }
        if (isset($map['InputParams'])) {
            $model->inputParams = $map['InputParams'];
        }
        if (isset($map['OutputExample'])) {
            $model->outputExample = $map['OutputExample'];
        }
        if (isset($map['OutputParams'])) {
            $model->outputParams = $map['OutputParams'];
        }
        if (isset($map['ServiceDescription'])) {
            $model->serviceDescription = $map['ServiceDescription'];
        }
        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
