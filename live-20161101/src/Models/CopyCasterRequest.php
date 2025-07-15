<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class CopyCasterRequest extends Model
{
    /**
     * @description The name of the new production studio.
     *
     * This parameter is required.
     *
     * @example caster001
     *
     * @var string
     */
    public $casterName;

    /**
     * @description The user-generated request token. This token is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the value, but you must ensure that it is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length.
     *
     * This parameter is required.
     *
     * @example 53200b81-b761-4c10-842a-a0726d97****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the original production studio.
     *
     *   If the production studio was created by calling the [CreateCaster](https://help.aliyun.com/document_detail/2848009.html) operation, check the value of the response parameter CasterId to obtain the ID.
     *   If the production studio was created by using the ApsaraVideo Live console, obtain the ID on the **Production Studio Management** page. To go to the page, log on to the **ApsaraVideo Live console** and click **Production Studios** in the left-side navigation pane.
     *
     * >  You can find the ID of the production studio in the Instance ID/Name column.
     *
     * This parameter is required.
     *
     * @example a2b8e671-2fe5-4642-a2ec-bf93880e****
     *
     * @var string
     */
    public $srcCasterId;
    protected $_name = [
        'casterName' => 'CasterName',
        'clientToken' => 'ClientToken',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'srcCasterId' => 'SrcCasterId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->casterName) {
            $res['CasterName'] = $this->casterName;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->srcCasterId) {
            $res['SrcCasterId'] = $this->srcCasterId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CopyCasterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CasterName'])) {
            $model->casterName = $map['CasterName'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SrcCasterId'])) {
            $model->srcCasterId = $map['SrcCasterId'];
        }

        return $model;
    }
}
