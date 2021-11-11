<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ModifyWhiteIpsRequest\whiteIpGroup;
use AlibabaCloud\Tea\Model;

class ModifyWhiteIpsRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $modifyMode;

    /**
     * @var string
     */
    public $networkType;

    /**
     * @var string
     */
    public $nodeType;

    /**
     * @var whiteIpGroup
     */
    public $whiteIpGroup;

    /**
     * @var string[]
     */
    public $whiteIpList;
    protected $_name = [
        'clientToken'  => 'clientToken',
        'modifyMode'   => 'modifyMode',
        'networkType'  => 'networkType',
        'nodeType'     => 'nodeType',
        'whiteIpGroup' => 'whiteIpGroup',
        'whiteIpList'  => 'whiteIpList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }
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
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }
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

        return $model;
    }
}
