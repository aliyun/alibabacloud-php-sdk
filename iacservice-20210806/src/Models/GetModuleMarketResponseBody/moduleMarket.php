<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models\GetModuleMarketResponseBody;

use AlibabaCloud\Tea\Model;

class moduleMarket extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $moduleDetail;

    /**
     * @var string
     */
    public $moduleId;

    /**
     * @var string
     */
    public $moduleMarketId;

    /**
     * @var string
     */
    public $moduleVersion;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'description'    => 'description',
        'message'        => 'message',
        'moduleDetail'   => 'moduleDetail',
        'moduleId'       => 'moduleId',
        'moduleMarketId' => 'moduleMarketId',
        'moduleVersion'  => 'moduleVersion',
        'name'           => 'name',
        'status'         => 'status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->message) {
            $res['message'] = $this->message;
        }
        if (null !== $this->moduleDetail) {
            $res['moduleDetail'] = $this->moduleDetail;
        }
        if (null !== $this->moduleId) {
            $res['moduleId'] = $this->moduleId;
        }
        if (null !== $this->moduleMarketId) {
            $res['moduleMarketId'] = $this->moduleMarketId;
        }
        if (null !== $this->moduleVersion) {
            $res['moduleVersion'] = $this->moduleVersion;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return moduleMarket
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['message'])) {
            $model->message = $map['message'];
        }
        if (isset($map['moduleDetail'])) {
            $model->moduleDetail = $map['moduleDetail'];
        }
        if (isset($map['moduleId'])) {
            $model->moduleId = $map['moduleId'];
        }
        if (isset($map['moduleMarketId'])) {
            $model->moduleMarketId = $map['moduleMarketId'];
        }
        if (isset($map['moduleVersion'])) {
            $model->moduleVersion = $map['moduleVersion'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
