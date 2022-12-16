<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateKibanaWhiteIpsRequest\whiteIpGroup;
use AlibabaCloud\Tea\Model;

class UpdateKibanaWhiteIpsRequest extends Model
{
    /**
     * @var string[]
     */
    public $kibanaIPWhitelist;

    /**
     * @var whiteIpGroup
     */
    public $whiteIpGroup;

    /**
     * @example 5A2CFF0E-5718-45B5-9D4D-70B3FF****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example Cover
     *
     * @var string
     */
    public $modifyMode;
    protected $_name = [
        'kibanaIPWhitelist' => 'kibanaIPWhitelist',
        'whiteIpGroup'      => 'whiteIpGroup',
        'clientToken'       => 'clientToken',
        'modifyMode'        => 'modifyMode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->kibanaIPWhitelist) {
            $res['kibanaIPWhitelist'] = $this->kibanaIPWhitelist;
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
     * @return UpdateKibanaWhiteIpsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['kibanaIPWhitelist'])) {
            if (!empty($map['kibanaIPWhitelist'])) {
                $model->kibanaIPWhitelist = $map['kibanaIPWhitelist'];
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
