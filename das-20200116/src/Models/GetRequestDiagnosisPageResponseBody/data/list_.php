<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetRequestDiagnosisPageResponseBody\data;

use AlibabaCloud\Dara\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $dbSchema;

    /**
     * @var string
     */
    public $engine;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $messageId;

    /**
     * @var string
     */
    public $param;

    /**
     * @var string
     */
    public $result;

    /**
     * @var string
     */
    public $sqlId;

    /**
     * @var int
     */
    public $state;

    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'accountId' => 'accountId',
        'dbSchema' => 'dbSchema',
        'engine' => 'engine',
        'gmtCreate' => 'gmtCreate',
        'gmtModified' => 'gmtModified',
        'messageId' => 'messageId',
        'param' => 'param',
        'result' => 'result',
        'sqlId' => 'sqlId',
        'state' => 'state',
        'uuid' => 'uuid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['accountId'] = $this->accountId;
        }

        if (null !== $this->dbSchema) {
            $res['dbSchema'] = $this->dbSchema;
        }

        if (null !== $this->engine) {
            $res['engine'] = $this->engine;
        }

        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }

        if (null !== $this->messageId) {
            $res['messageId'] = $this->messageId;
        }

        if (null !== $this->param) {
            $res['param'] = $this->param;
        }

        if (null !== $this->result) {
            $res['result'] = $this->result;
        }

        if (null !== $this->sqlId) {
            $res['sqlId'] = $this->sqlId;
        }

        if (null !== $this->state) {
            $res['state'] = $this->state;
        }

        if (null !== $this->uuid) {
            $res['uuid'] = $this->uuid;
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
        if (isset($map['accountId'])) {
            $model->accountId = $map['accountId'];
        }

        if (isset($map['dbSchema'])) {
            $model->dbSchema = $map['dbSchema'];
        }

        if (isset($map['engine'])) {
            $model->engine = $map['engine'];
        }

        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }

        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }

        if (isset($map['messageId'])) {
            $model->messageId = $map['messageId'];
        }

        if (isset($map['param'])) {
            $model->param = $map['param'];
        }

        if (isset($map['result'])) {
            $model->result = $map['result'];
        }

        if (isset($map['sqlId'])) {
            $model->sqlId = $map['sqlId'];
        }

        if (isset($map['state'])) {
            $model->state = $map['state'];
        }

        if (isset($map['uuid'])) {
            $model->uuid = $map['uuid'];
        }

        return $model;
    }
}
