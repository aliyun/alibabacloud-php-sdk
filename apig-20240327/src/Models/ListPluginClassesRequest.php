<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;

class ListPluginClassesRequest extends Model
{
    /**
     * @var string
     */
    public $aliasLike;

    /**
     * @var string
     */
    public $direction;

    /**
     * @var bool
     */
    public $excludeBuiltinAiProxy;

    /**
     * @var string
     */
    public $gatewayId;

    /**
     * @var string
     */
    public $gatewayType;

    /**
     * @var bool
     */
    public $installed;

    /**
     * @var string
     */
    public $nameLike;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'aliasLike' => 'aliasLike',
        'direction' => 'direction',
        'excludeBuiltinAiProxy' => 'excludeBuiltinAiProxy',
        'gatewayId' => 'gatewayId',
        'gatewayType' => 'gatewayType',
        'installed' => 'installed',
        'nameLike' => 'nameLike',
        'pageNumber' => 'pageNumber',
        'pageSize' => 'pageSize',
        'source' => 'source',
        'type' => 'type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliasLike) {
            $res['aliasLike'] = $this->aliasLike;
        }

        if (null !== $this->direction) {
            $res['direction'] = $this->direction;
        }

        if (null !== $this->excludeBuiltinAiProxy) {
            $res['excludeBuiltinAiProxy'] = $this->excludeBuiltinAiProxy;
        }

        if (null !== $this->gatewayId) {
            $res['gatewayId'] = $this->gatewayId;
        }

        if (null !== $this->gatewayType) {
            $res['gatewayType'] = $this->gatewayType;
        }

        if (null !== $this->installed) {
            $res['installed'] = $this->installed;
        }

        if (null !== $this->nameLike) {
            $res['nameLike'] = $this->nameLike;
        }

        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->source) {
            $res['source'] = $this->source;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['aliasLike'])) {
            $model->aliasLike = $map['aliasLike'];
        }

        if (isset($map['direction'])) {
            $model->direction = $map['direction'];
        }

        if (isset($map['excludeBuiltinAiProxy'])) {
            $model->excludeBuiltinAiProxy = $map['excludeBuiltinAiProxy'];
        }

        if (isset($map['gatewayId'])) {
            $model->gatewayId = $map['gatewayId'];
        }

        if (isset($map['gatewayType'])) {
            $model->gatewayType = $map['gatewayType'];
        }

        if (isset($map['installed'])) {
            $model->installed = $map['installed'];
        }

        if (isset($map['nameLike'])) {
            $model->nameLike = $map['nameLike'];
        }

        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['source'])) {
            $model->source = $map['source'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
