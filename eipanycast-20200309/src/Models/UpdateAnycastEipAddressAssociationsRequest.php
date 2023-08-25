<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eipanycast\V20200309\Models;

use AlibabaCloud\SDK\Eipanycast\V20200309\Models\UpdateAnycastEipAddressAssociationsRequest\popLocationAddList;
use AlibabaCloud\SDK\Eipanycast\V20200309\Models\UpdateAnycastEipAddressAssociationsRequest\popLocationDeleteList;
use AlibabaCloud\Tea\Model;

class UpdateAnycastEipAddressAssociationsRequest extends Model
{
    /**
     * @description The ID of the Anycast EIP.
     *
     * @example aeip-bp1ix34fralt4ykf3****
     *
     * @var string
     */
    public $anycastId;

    /**
     * @description The association mode. Valid values:
     *
     *   **Default**: the default mode. In this mode, cloud resources to be associated are set as default origin servers.
     *   **Normal**: the standard mode. In this mode, cloud resources to be associated are set as standard origin servers.
     *
     * @example Default
     *
     * @var string
     */
    public $associationMode;

    /**
     * @description The ID of the cloud resource with which you want to associate the Anycast EIP.
     *
     * @example lb-d7oxbixhxv1uupnon****
     *
     * @var string
     */
    public $bindInstanceId;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the value, but you must make sure that it is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length.
     *
     * >  If you do not set this parameter, the system automatically uses **RequestId** as **ClientToken**. **RequestId** may be different for each API request.
     * @example 02fb3da4-130e-11e9-8e44-001****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Specifies whether to only precheck the request. Valid values:
     *
     *   **true**: prechecks the request without updating the association information. The system checks the required parameters, request syntax, and limits. If the request fails to pass the precheck, an error message is returned. If the request passes the precheck, the `DryRunOperation` error code is returned.
     *   **false** (default): sends the API request. If the request passes the precheck, a 2xx HTTP status code is returned and the operation is performed.
     *
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description The access areas and access points to be added.
     *
     * @var popLocationAddList[]
     */
    public $popLocationAddList;

    /**
     * @description The access areas and access points to be deleted.
     *
     * @var popLocationDeleteList[]
     */
    public $popLocationDeleteList;
    protected $_name = [
        'anycastId'             => 'AnycastId',
        'associationMode'       => 'AssociationMode',
        'bindInstanceId'        => 'BindInstanceId',
        'clientToken'           => 'ClientToken',
        'dryRun'                => 'DryRun',
        'popLocationAddList'    => 'PopLocationAddList',
        'popLocationDeleteList' => 'PopLocationDeleteList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->anycastId) {
            $res['AnycastId'] = $this->anycastId;
        }
        if (null !== $this->associationMode) {
            $res['AssociationMode'] = $this->associationMode;
        }
        if (null !== $this->bindInstanceId) {
            $res['BindInstanceId'] = $this->bindInstanceId;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->popLocationAddList) {
            $res['PopLocationAddList'] = [];
            if (null !== $this->popLocationAddList && \is_array($this->popLocationAddList)) {
                $n = 0;
                foreach ($this->popLocationAddList as $item) {
                    $res['PopLocationAddList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->popLocationDeleteList) {
            $res['PopLocationDeleteList'] = [];
            if (null !== $this->popLocationDeleteList && \is_array($this->popLocationDeleteList)) {
                $n = 0;
                foreach ($this->popLocationDeleteList as $item) {
                    $res['PopLocationDeleteList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateAnycastEipAddressAssociationsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AnycastId'])) {
            $model->anycastId = $map['AnycastId'];
        }
        if (isset($map['AssociationMode'])) {
            $model->associationMode = $map['AssociationMode'];
        }
        if (isset($map['BindInstanceId'])) {
            $model->bindInstanceId = $map['BindInstanceId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['PopLocationAddList'])) {
            if (!empty($map['PopLocationAddList'])) {
                $model->popLocationAddList = [];
                $n                         = 0;
                foreach ($map['PopLocationAddList'] as $item) {
                    $model->popLocationAddList[$n++] = null !== $item ? popLocationAddList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PopLocationDeleteList'])) {
            if (!empty($map['PopLocationDeleteList'])) {
                $model->popLocationDeleteList = [];
                $n                            = 0;
                foreach ($map['PopLocationDeleteList'] as $item) {
                    $model->popLocationDeleteList[$n++] = null !== $item ? popLocationDeleteList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
