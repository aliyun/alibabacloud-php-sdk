<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models;

use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\GetExpressConnectRouterResponseBody\tags;
use AlibabaCloud\Tea\Model;

class GetExpressConnectRouterResponseBody extends Model
{
    /**
     * @example Authentication is failed for ****
     *
     * @var string
     */
    public $accessDeniedDetail;

    /**
     * @example 45104
     *
     * @var int
     */
    public $alibabaSideAsn;

    /**
     * @example Normal
     *
     * @var string
     */
    public $bizStatus;

    /**
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @example IllegalParamFormat.Name
     *
     * @var string
     */
    public $dynamicCode;

    /**
     * @example The param format of Name **** is illegal.
     *
     * @var string
     */
    public $dynamicMessage;

    /**
     * @example ecr-fu8rszhgv7623c****
     *
     * @var string
     */
    public $ecrId;

    /**
     * @example 2023-12-26T09:17:29Z
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 2023-12-26T09:17:29Z
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example 200
     *
     * @var int
     */
    public $httpStatusCode;

    /**
     * @example OK
     *
     * @var string
     */
    public $message;

    /**
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @example 169519127929****
     *
     * @var int
     */
    public $ownerId;

    /**
     * @example 6FABF516-FED3-5697-BDA2-B18C5D9A****
     *
     * @var string
     */
    public $requestId;

    /**
     * @example rg-aek2aq7f4va****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @example ACTIVE
     *
     * @var string
     */
    public $status;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'accessDeniedDetail' => 'AccessDeniedDetail',
        'alibabaSideAsn'     => 'AlibabaSideAsn',
        'bizStatus'          => 'BizStatus',
        'code'               => 'Code',
        'description'        => 'Description',
        'dynamicCode'        => 'DynamicCode',
        'dynamicMessage'     => 'DynamicMessage',
        'ecrId'              => 'EcrId',
        'gmtCreate'          => 'GmtCreate',
        'gmtModified'        => 'GmtModified',
        'httpStatusCode'     => 'HttpStatusCode',
        'message'            => 'Message',
        'name'               => 'Name',
        'ownerId'            => 'OwnerId',
        'requestId'          => 'RequestId',
        'resourceGroupId'    => 'ResourceGroupId',
        'status'             => 'Status',
        'success'            => 'Success',
        'tags'               => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessDeniedDetail) {
            $res['AccessDeniedDetail'] = $this->accessDeniedDetail;
        }
        if (null !== $this->alibabaSideAsn) {
            $res['AlibabaSideAsn'] = $this->alibabaSideAsn;
        }
        if (null !== $this->bizStatus) {
            $res['BizStatus'] = $this->bizStatus;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->dynamicCode) {
            $res['DynamicCode'] = $this->dynamicCode;
        }
        if (null !== $this->dynamicMessage) {
            $res['DynamicMessage'] = $this->dynamicMessage;
        }
        if (null !== $this->ecrId) {
            $res['EcrId'] = $this->ecrId;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetExpressConnectRouterResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessDeniedDetail'])) {
            $model->accessDeniedDetail = $map['AccessDeniedDetail'];
        }
        if (isset($map['AlibabaSideAsn'])) {
            $model->alibabaSideAsn = $map['AlibabaSideAsn'];
        }
        if (isset($map['BizStatus'])) {
            $model->bizStatus = $map['BizStatus'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DynamicCode'])) {
            $model->dynamicCode = $map['DynamicCode'];
        }
        if (isset($map['DynamicMessage'])) {
            $model->dynamicMessage = $map['DynamicMessage'];
        }
        if (isset($map['EcrId'])) {
            $model->ecrId = $map['EcrId'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
