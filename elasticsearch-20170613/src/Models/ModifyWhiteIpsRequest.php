<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ModifyWhiteIpsRequest\whiteIpGroup;
use AlibabaCloud\Tea\Model;

class ModifyWhiteIpsRequest extends Model
{
    /**
     * @description The information about the IP address whitelist that you want to update. You can specify only one whitelist.
     *
     * > You cannot configure both the whiteIpList and whiteIpGroup parameters.
     * @example Cover
     *
     * @var string
     */
    public $modifyMode;

    /**
     * @description The IP addresses in the whitelist. This parameter is available if the whiteIpGroup parameter is left empty. The default IP address whitelist is updated based on the value of this parameter.
     *
     * > You cannot configure both the whiteIpList and whiteIpGroup parameters.
     * @example PUBLIC
     *
     * @var string
     */
    public $networkType;

    /**
     * @description The IP addresses in the whitelist. This parameter is available if the whiteIpGroup parameter is left empty. The default IP address whitelist is updated based on the value of this parameter.
     *
     * @example WORKER
     *
     * @var string
     */
    public $nodeType;

    /**
     * @description The IP addresses in the whitelist. This parameter is required if you configure the whiteIpGroup parameter.
     *
     * @var whiteIpGroup
     */
    public $whiteIpGroup;

    /**
     * @description The name of the whitelist. This parameter is required if you configure the whiteIpGroup parameter.
     *
     * @var string[]
     */
    public $whiteIpList;

    /**
     * @description The network type. This parameter is required if you configure the whiteIpList parameter. Valid values:
     *
     *   PRIVATE
     *   PUBLIC
     *
     * @example 5A2CFF0E-5718-45B5-9D4D-70B3FF****
     *
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'modifyMode'   => 'modifyMode',
        'networkType'  => 'networkType',
        'nodeType'     => 'nodeType',
        'whiteIpGroup' => 'whiteIpGroup',
        'whiteIpList'  => 'whiteIpList',
        'clientToken'  => 'clientToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->modifyMode) {
            $res['modifyMode'] = $this->modifyMode;
        }
        if (null !== $this->networkType) {
            $res['networkType'] = $this->networkType;
        }
        if (null !== $this->nodeType) {
            $res['nodeType'] = $this->nodeType;
        }
        if (null !== $this->whiteIpGroup) {
            $res['whiteIpGroup'] = null !== $this->whiteIpGroup ? $this->whiteIpGroup->toMap() : null;
        }
        if (null !== $this->whiteIpList) {
            $res['whiteIpList'] = $this->whiteIpList;
        }
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyWhiteIpsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['modifyMode'])) {
            $model->modifyMode = $map['modifyMode'];
        }
        if (isset($map['networkType'])) {
            $model->networkType = $map['networkType'];
        }
        if (isset($map['nodeType'])) {
            $model->nodeType = $map['nodeType'];
        }
        if (isset($map['whiteIpGroup'])) {
            $model->whiteIpGroup = whiteIpGroup::fromMap($map['whiteIpGroup']);
        }
        if (isset($map['whiteIpList'])) {
            if (!empty($map['whiteIpList'])) {
                $model->whiteIpList = $map['whiteIpList'];
            }
        }
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }

        return $model;
    }
}
