<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class CreateCloudDriveServiceResponseBody extends Model
{
    /**
     * @description The ID of the attached cloud disk.
     *
     * @example cn-hangzhou+cds-7782057786
     *
     * @var string
     */
    public $cdsId;

    /**
     * @description The name of the cloud disk that is created in Cloud Drive Service.
     *
     * @example CDS_Windows_1126
     *
     * @var string
     */
    public $cdsName;

    /**
     * @var string
     */
    public $cenId;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @description The maximum capacity of each instance in Cloud Drive Service. Unit: GiB
     *
     * @example 213674622976
     *
     * @var string
     */
    public $maxSize;

    /**
     * @var string
     */
    public $officeSiteType;

    /**
     * @description The ID of the request.
     *
     * @example 062B1439-709A-580E-85DF-CE97A1560565
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'cdsId'          => 'CdsId',
        'cdsName'        => 'CdsName',
        'cenId'          => 'CenId',
        'domainName'     => 'DomainName',
        'maxSize'        => 'MaxSize',
        'officeSiteType' => 'OfficeSiteType',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cdsId) {
            $res['CdsId'] = $this->cdsId;
        }
        if (null !== $this->cdsName) {
            $res['CdsName'] = $this->cdsName;
        }
        if (null !== $this->cenId) {
            $res['CenId'] = $this->cenId;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->maxSize) {
            $res['MaxSize'] = $this->maxSize;
        }
        if (null !== $this->officeSiteType) {
            $res['OfficeSiteType'] = $this->officeSiteType;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCloudDriveServiceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CdsId'])) {
            $model->cdsId = $map['CdsId'];
        }
        if (isset($map['CdsName'])) {
            $model->cdsName = $map['CdsName'];
        }
        if (isset($map['CenId'])) {
            $model->cenId = $map['CenId'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['MaxSize'])) {
            $model->maxSize = $map['MaxSize'];
        }
        if (isset($map['OfficeSiteType'])) {
            $model->officeSiteType = $map['OfficeSiteType'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
