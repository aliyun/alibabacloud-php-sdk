<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models;

use AlibabaCloud\Tea\Model;

class CreateModuleMarketRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $codeUrl;

    /**
     * @var string
     */
    public $description;

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
    public $moduleVersion;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'clientToken'   => 'clientToken',
        'codeUrl'       => 'codeUrl',
        'description'   => 'description',
        'moduleDetail'  => 'moduleDetail',
        'moduleId'      => 'moduleId',
        'moduleVersion' => 'moduleVersion',
        'name'          => 'name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }
        if (null !== $this->codeUrl) {
            $res['codeUrl'] = $this->codeUrl;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->moduleDetail) {
            $res['moduleDetail'] = $this->moduleDetail;
        }
        if (null !== $this->moduleId) {
            $res['moduleId'] = $this->moduleId;
        }
        if (null !== $this->moduleVersion) {
            $res['moduleVersion'] = $this->moduleVersion;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateModuleMarketRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }
        if (isset($map['codeUrl'])) {
            $model->codeUrl = $map['codeUrl'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['moduleDetail'])) {
            $model->moduleDetail = $map['moduleDetail'];
        }
        if (isset($map['moduleId'])) {
            $model->moduleId = $map['moduleId'];
        }
        if (isset($map['moduleVersion'])) {
            $model->moduleVersion = $map['moduleVersion'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
