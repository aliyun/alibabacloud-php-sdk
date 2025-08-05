<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class ModifyObjectGroupOperationRequest extends Model
{
    /**
     * @description The remarks of the operation.
     *
     * @example test
     *
     * @var string
     */
    public $comment;

    /**
     * @description The direction of the traffic to which the access control policy applies.
     *
     * Valid values:
     *
     *   **in**: inbound.
     *   **out**: outbound.
     *
     * This parameter is required.
     *
     * @example out
     *
     * @var string
     */
    public $direction;

    /**
     * @description The language of the content within the response. Valid values:
     *
     *   **zh** (default)
     *   **en**
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The operation objects.
     *
     * This parameter is required.
     *
     * @var string[]
     */
    public $objectList;

    /**
     * @description The operation. Valid values:
     *
     *   **ignore**: adds the operation object to the whitelist.
     *   **cancelIgnore**: removes the operation object from the whitelist.
     *   **subscribe**: follows the operation object.
     *   **unsubscribe**: unfollows the operation object.
     *
     * This parameter is required.
     *
     * @example ignore
     *
     * @var string
     */
    public $objectOperation;

    /**
     * @description The type of the operation object.
     *
     * Valid values:
     *
     *   **assetsIp**: the asset IP address.
     *   **destinationIp**: the destination IP address.
     *   **destinationPort**: the destination port.
     *   **destinationDomain**: the destination domain name.
     *
     * This parameter is required.
     *
     * @example destinationDomain
     *
     * @var string
     */
    public $objectType;

    /**
     * @description The source IP address of the request.
     *
     * @example 123.xxx.251.60
     *
     * @var string
     */
    public $sourceIp;
    protected $_name = [
        'comment' => 'Comment',
        'direction' => 'Direction',
        'lang' => 'Lang',
        'objectList' => 'ObjectList',
        'objectOperation' => 'ObjectOperation',
        'objectType' => 'ObjectType',
        'sourceIp' => 'SourceIp',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->objectList) {
            $res['ObjectList'] = $this->objectList;
        }
        if (null !== $this->objectOperation) {
            $res['ObjectOperation'] = $this->objectOperation;
        }
        if (null !== $this->objectType) {
            $res['ObjectType'] = $this->objectType;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyObjectGroupOperationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['Direction'])) {
            $model->direction = $map['Direction'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['ObjectList'])) {
            if (!empty($map['ObjectList'])) {
                $model->objectList = $map['ObjectList'];
            }
        }
        if (isset($map['ObjectOperation'])) {
            $model->objectOperation = $map['ObjectOperation'];
        }
        if (isset($map['ObjectType'])) {
            $model->objectType = $map['ObjectType'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        return $model;
    }
}
