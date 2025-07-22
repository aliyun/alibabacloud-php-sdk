<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models;

use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\CreateExpressConnectRouterRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateExpressConnectRouterRequest extends Model
{
    /**
     * @description The autonomous system number (ASN) of the ECR. Valid values: 45104, 64512 to 65534, and 4200000000 to 4294967294. Default value: 45104. The value 65025 is reserved by Alibaba Cloud.
     *
     * This parameter is required.
     *
     * @example 45104
     *
     * @var int
     */
    public $alibabaSideAsn;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters.
     *
     * >  If you do not specify this parameter, the system automatically uses the **request ID** as the **client token**. The **request ID** may be different for each request.
     *
     * @example 02fb3da4-130e-11e9-8e44-00****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The description of the ECR.
     *
     * >  The description can be empty or 0 to 256 characters in length and cannot start with http:// or https://.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description Specifies whether to perform only a dry run, without performing the actual request. Valid values:
     *
     *   **true**: performs only a dry run.
     *   **false** (default): performs a dry run and performs the actual request.
     *
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description The name of the ECR.
     *
     * >  The name must be 0 to 128 characters in length, and cannot start with http:// or https://.
     *
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the resource group to which the ECR belongs.
     *
     * @example rg-acfmvvajg5q****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The information about the tags.
     *
     * You can specify at most 20 tags in each call.
     *
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'alibabaSideAsn' => 'AlibabaSideAsn',
        'clientToken' => 'ClientToken',
        'description' => 'Description',
        'dryRun' => 'DryRun',
        'name' => 'Name',
        'resourceGroupId' => 'ResourceGroupId',
        'tag' => 'Tag',
    ];

    public function validate() {}

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
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
