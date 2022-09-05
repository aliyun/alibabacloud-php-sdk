<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class ListIntegrationRequest extends Model
{
    /**
     * @var string
     */
    public $integrationName;

    /**
     * @var string
     */
    public $integrationProductType;

    /**
     * @var bool
     */
    public $isDetail;

    /**
     * @var int
     */
    public $page;

    /**
     * @var int
     */
    public $size;
    protected $_name = [
        'integrationName'        => 'IntegrationName',
        'integrationProductType' => 'IntegrationProductType',
        'isDetail'               => 'IsDetail',
        'page'                   => 'Page',
        'size'                   => 'Size',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->integrationName) {
            $res['IntegrationName'] = $this->integrationName;
        }
        if (null !== $this->integrationProductType) {
            $res['IntegrationProductType'] = $this->integrationProductType;
        }
        if (null !== $this->isDetail) {
            $res['IsDetail'] = $this->isDetail;
        }
        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListIntegrationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IntegrationName'])) {
            $model->integrationName = $map['IntegrationName'];
        }
        if (isset($map['IntegrationProductType'])) {
            $model->integrationProductType = $map['IntegrationProductType'];
        }
        if (isset($map['IsDetail'])) {
            $model->isDetail = $map['IsDetail'];
        }
        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        return $model;
    }
}
