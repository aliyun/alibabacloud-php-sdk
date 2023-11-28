<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateWhiteIpsRequest\whiteIpGroup;
use AlibabaCloud\Tea\Model;

class UpdateWhiteIpsRequest extends Model
{
    /**
     * @description The name of the whitelist. This parameter is required if you configure the whiteIpGroup parameter.
     *
     * @var string[]
     */
    public $esIPWhitelist;

    /**
     * @description The IP addresses in the whitelist. This parameter is required if you configure the whiteIpGroup parameter.
     *
     * @var whiteIpGroup
     */
    public $whiteIpGroup;

    /**
     * @description The IP addresses in the whitelist.
     *
     * @example 5A2CFF0E-5718-45B5-9D4D-70B3FF****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The IP addresses in the whitelist. This parameter is available if the whiteIpGroup parameter is left empty. The default IP address whitelist is updated based on the value of this parameter.
     *
     * >  You cannot configure both the esIPWhitelist and whiteIpGroup parameters.
     * @example Cover
     *
     * @var string
     */
    public $modifyMode;
    protected $_name = [
        'esIPWhitelist' => 'esIPWhitelist',
        'whiteIpGroup'  => 'whiteIpGroup',
        'clientToken'   => 'clientToken',
        'modifyMode'    => 'modifyMode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->esIPWhitelist) {
            $res['esIPWhitelist'] = $this->esIPWhitelist;
        }
        if (null !== $this->whiteIpGroup) {
            $res['whiteIpGroup'] = null !== $this->whiteIpGroup ? $this->whiteIpGroup->toMap() : null;
        }
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }
        if (null !== $this->modifyMode) {
            $res['modifyMode'] = $this->modifyMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateWhiteIpsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['esIPWhitelist'])) {
            if (!empty($map['esIPWhitelist'])) {
                $model->esIPWhitelist = $map['esIPWhitelist'];
            }
        }
        if (isset($map['whiteIpGroup'])) {
            $model->whiteIpGroup = whiteIpGroup::fromMap($map['whiteIpGroup']);
        }
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }
        if (isset($map['modifyMode'])) {
            $model->modifyMode = $map['modifyMode'];
        }

        return $model;
    }
}
