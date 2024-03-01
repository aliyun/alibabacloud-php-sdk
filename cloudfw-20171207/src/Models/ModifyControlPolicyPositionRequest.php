<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class ModifyControlPolicyPositionRequest extends Model
{
    /**
     * @description The direction of the traffic to which the IPv4 access control policy applies. Valid values:
     *
     *   in: inbound traffic
     *   out: outbound traffic
     *
     * @example in
     *
     * @var string
     */
    public $direction;

    /**
     * @description The language of the content within the response. Valid values:
     *
     *   zh: Chinese (default)
     *   en: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The new priority of the IPv4 access control policy. You must specify a numeric value for this parameter. The value 1 indicates the highest priority. A larger value indicates a lower priority.
     *
     * >  The new priority cannot exceed the priority range of the IPv4 access control policy. Otherwise, an error occurs when you call this operation. Before you call this operation, we recommend that you use the [DescribePolicyPriorUsed](~~138862~~) operation to query the priority range of the IPv4 access control policy in the specified direction.
     * @example 1
     *
     * @var string
     */
    public $newOrder;

    /**
     * @description The original priority of the IPv4 access control policy.
     *
     * @example 5
     *
     * @var string
     */
    public $oldOrder;

    /**
     * @description The source IP address of the request.
     *
     * @example 192.0.XX.XX
     *
     * @deprecated
     *
     * @var string
     */
    public $sourceIp;
    protected $_name = [
        'direction' => 'Direction',
        'lang'      => 'Lang',
        'newOrder'  => 'NewOrder',
        'oldOrder'  => 'OldOrder',
        'sourceIp'  => 'SourceIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->newOrder) {
            $res['NewOrder'] = $this->newOrder;
        }
        if (null !== $this->oldOrder) {
            $res['OldOrder'] = $this->oldOrder;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyControlPolicyPositionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Direction'])) {
            $model->direction = $map['Direction'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['NewOrder'])) {
            $model->newOrder = $map['NewOrder'];
        }
        if (isset($map['OldOrder'])) {
            $model->oldOrder = $map['OldOrder'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        return $model;
    }
}
