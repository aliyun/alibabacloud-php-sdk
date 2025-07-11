<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oms\V20160615\Models;

use AlibabaCloud\Dara\Model;

class PutMeasureDataByProxyRequest extends Model
{
    /**
     * @var string
     */
    public $apiType;

    /**
     * @var bool
     */
    public $compressed;

    /**
     * @var string
     */
    public $data;

    /**
     * @var string
     */
    public $dataType;

    /**
     * @var string
     */
    public $domainCode;

    /**
     * @var string
     */
    public $filter;
    protected $_name = [
        'apiType' => 'ApiType',
        'compressed' => 'Compressed',
        'data' => 'Data',
        'dataType' => 'DataType',
        'domainCode' => 'DomainCode',
        'filter' => 'Filter',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiType) {
            $res['ApiType'] = $this->apiType;
        }

        if (null !== $this->compressed) {
            $res['Compressed'] = $this->compressed;
        }

        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }

        if (null !== $this->dataType) {
            $res['DataType'] = $this->dataType;
        }

        if (null !== $this->domainCode) {
            $res['DomainCode'] = $this->domainCode;
        }

        if (null !== $this->filter) {
            $res['Filter'] = $this->filter;
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
        if (isset($map['ApiType'])) {
            $model->apiType = $map['ApiType'];
        }

        if (isset($map['Compressed'])) {
            $model->compressed = $map['Compressed'];
        }

        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }

        if (isset($map['DataType'])) {
            $model->dataType = $map['DataType'];
        }

        if (isset($map['DomainCode'])) {
            $model->domainCode = $map['DomainCode'];
        }

        if (isset($map['Filter'])) {
            $model->filter = $map['Filter'];
        }

        return $model;
    }
}
