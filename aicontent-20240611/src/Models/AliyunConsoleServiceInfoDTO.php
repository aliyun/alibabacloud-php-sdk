<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Dara\Model;

class AliyunConsoleServiceInfoDTO extends Model
{
    /**
     * @var string
     */
    public $buyUrl;

    /**
     * @var string
     */
    public $documentUrl;

    /**
     * @var int
     */
    public $freeConcurrencyCount;

    /**
     * @var int
     */
    public $freeCount;

    /**
     * @var string
     */
    public $serviceCode;

    /**
     * @var string
     */
    public $serviceName;
    protected $_name = [
        'buyUrl' => 'buyUrl',
        'documentUrl' => 'documentUrl',
        'freeConcurrencyCount' => 'freeConcurrencyCount',
        'freeCount' => 'freeCount',
        'serviceCode' => 'serviceCode',
        'serviceName' => 'serviceName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->buyUrl) {
            $res['buyUrl'] = $this->buyUrl;
        }

        if (null !== $this->documentUrl) {
            $res['documentUrl'] = $this->documentUrl;
        }

        if (null !== $this->freeConcurrencyCount) {
            $res['freeConcurrencyCount'] = $this->freeConcurrencyCount;
        }

        if (null !== $this->freeCount) {
            $res['freeCount'] = $this->freeCount;
        }

        if (null !== $this->serviceCode) {
            $res['serviceCode'] = $this->serviceCode;
        }

        if (null !== $this->serviceName) {
            $res['serviceName'] = $this->serviceName;
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
        if (isset($map['buyUrl'])) {
            $model->buyUrl = $map['buyUrl'];
        }

        if (isset($map['documentUrl'])) {
            $model->documentUrl = $map['documentUrl'];
        }

        if (isset($map['freeConcurrencyCount'])) {
            $model->freeConcurrencyCount = $map['freeConcurrencyCount'];
        }

        if (isset($map['freeCount'])) {
            $model->freeCount = $map['freeCount'];
        }

        if (isset($map['serviceCode'])) {
            $model->serviceCode = $map['serviceCode'];
        }

        if (isset($map['serviceName'])) {
            $model->serviceName = $map['serviceName'];
        }

        return $model;
    }
}
