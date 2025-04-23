<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models;

use AlibabaCloud\Dara\Model;

class ListProjectsRequest extends Model
{
    /**
     * @var bool
     */
    public $listSystemCatalog;

    /**
     * @var string
     */
    public $marker;

    /**
     * @var int
     */
    public $maxItem;

    /**
     * @var string
     */
    public $prefix;

    /**
     * @var string
     */
    public $quotaName;

    /**
     * @var string
     */
    public $quotaNickName;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $saleTags;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'listSystemCatalog' => 'listSystemCatalog',
        'marker' => 'marker',
        'maxItem' => 'maxItem',
        'prefix' => 'prefix',
        'quotaName' => 'quotaName',
        'quotaNickName' => 'quotaNickName',
        'region' => 'region',
        'saleTags' => 'saleTags',
        'tenantId' => 'tenantId',
        'type' => 'type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->listSystemCatalog) {
            $res['listSystemCatalog'] = $this->listSystemCatalog;
        }

        if (null !== $this->marker) {
            $res['marker'] = $this->marker;
        }

        if (null !== $this->maxItem) {
            $res['maxItem'] = $this->maxItem;
        }

        if (null !== $this->prefix) {
            $res['prefix'] = $this->prefix;
        }

        if (null !== $this->quotaName) {
            $res['quotaName'] = $this->quotaName;
        }

        if (null !== $this->quotaNickName) {
            $res['quotaNickName'] = $this->quotaNickName;
        }

        if (null !== $this->region) {
            $res['region'] = $this->region;
        }

        if (null !== $this->saleTags) {
            $res['saleTags'] = $this->saleTags;
        }

        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
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
        if (isset($map['listSystemCatalog'])) {
            $model->listSystemCatalog = $map['listSystemCatalog'];
        }

        if (isset($map['marker'])) {
            $model->marker = $map['marker'];
        }

        if (isset($map['maxItem'])) {
            $model->maxItem = $map['maxItem'];
        }

        if (isset($map['prefix'])) {
            $model->prefix = $map['prefix'];
        }

        if (isset($map['quotaName'])) {
            $model->quotaName = $map['quotaName'];
        }

        if (isset($map['quotaNickName'])) {
            $model->quotaNickName = $map['quotaNickName'];
        }

        if (isset($map['region'])) {
            $model->region = $map['region'];
        }

        if (isset($map['saleTags'])) {
            $model->saleTags = $map['saleTags'];
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
