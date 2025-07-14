<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class ListAppServicesPageRequest extends Model
{
    /**
     * @description The application ID.
     *
     * This parameter is required.
     *
     * @example 6dcc8c9e-d3da-478a-a066-86dcf820****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The page number of the returned page.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries returned on each page. Valid values: 0 to 9999.
     *
     * @example 9999
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The service type. Valid values:
     *
     *   **dubbo**
     *   **springCloud**
     *
     * This parameter is required.
     *
     * @example springCloud
     *
     * @var string
     */
    public $serviceType;
    protected $_name = [
        'appId' => 'AppId',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'serviceType' => 'ServiceType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->serviceType) {
            $res['ServiceType'] = $this->serviceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAppServicesPageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ServiceType'])) {
            $model->serviceType = $map['ServiceType'];
        }

        return $model;
    }
}
