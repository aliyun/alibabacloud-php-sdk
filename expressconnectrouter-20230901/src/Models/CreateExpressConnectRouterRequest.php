<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models;

use AlibabaCloud\Tea\Model;

class CreateExpressConnectRouterRequest extends Model
{
    /**
     * @example 45104
     *
     * @var int
     */
    public $alibabaSideAsn;

    /**
     * @example 02fb3da4-130e-11e9-8e44-00****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @example rg-acfmvvajg5q****
     *
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'alibabaSideAsn'  => 'AlibabaSideAsn',
        'clientToken'     => 'ClientToken',
        'description'     => 'Description',
        'dryRun'          => 'DryRun',
        'name'            => 'Name',
        'resourceGroupId' => 'ResourceGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alibabaSideAsn) {
            $res['AlibabaSideAsn'] = $this->alibabaSideAsn;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateExpressConnectRouterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlibabaSideAsn'])) {
            $model->alibabaSideAsn = $map['AlibabaSideAsn'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}
