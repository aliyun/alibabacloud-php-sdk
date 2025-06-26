<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oms\V20160615\Models;

use AlibabaCloud\Dara\Model;

class GetDomainPartByProxyRequest extends Model
{
    /**
     * @var bool
     */
    public $compressEnable;

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
    public $part;
    protected $_name = [
        'compressEnable' => 'CompressEnable',
        'dataType' => 'DataType',
        'domainCode' => 'DomainCode',
        'part' => 'Part',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->compressEnable) {
            $res['CompressEnable'] = $this->compressEnable;
        }

        if (null !== $this->dataType) {
            $res['DataType'] = $this->dataType;
        }

        if (null !== $this->domainCode) {
            $res['DomainCode'] = $this->domainCode;
        }

        if (null !== $this->part) {
            $res['Part'] = $this->part;
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
        if (isset($map['CompressEnable'])) {
            $model->compressEnable = $map['CompressEnable'];
        }

        if (isset($map['DataType'])) {
            $model->dataType = $map['DataType'];
        }

        if (isset($map['DomainCode'])) {
            $model->domainCode = $map['DomainCode'];
        }

        if (isset($map['Part'])) {
            $model->part = $map['Part'];
        }

        return $model;
    }
}
