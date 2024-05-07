<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idrsservice\V20200630\Models\GetAppResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example {}
     *
     * @var string
     */
    public $config;

    /**
     * @example 1
     *
     * @var string
     */
    public $createdAt;

    /**
     * @example false
     *
     * @var string
     */
    public $disabled;

    /**
     * @example ff1d7783-e087-4d62-92df-3a163eca7c07
     *
     * @var string
     */
    public $feeId;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'config'    => 'Config',
        'createdAt' => 'CreatedAt',
        'disabled'  => 'Disabled',
        'feeId'     => 'FeeId',
        'name'      => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }
        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
        }
        if (null !== $this->disabled) {
            $res['Disabled'] = $this->disabled;
        }
        if (null !== $this->feeId) {
            $res['FeeId'] = $this->feeId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }
        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }
        if (isset($map['Disabled'])) {
            $model->disabled = $map['Disabled'];
        }
        if (isset($map['FeeId'])) {
            $model->feeId = $map['FeeId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
