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
    public $nodeType;

    /**
     * @var string
     */
    public $networkType;

    /**
     * @var string
     */
    public $modifyMode;

    /**
     * @var string[]
     */
    public $whiteIpList;

    /**
     * @var whiteIpGroup
     */
    public $whiteIpGroup;
    protected $_name = [
        'clientToken'  => 'clientToken',
        'nodeType'     => 'nodeType',
        'networkType'  => 'networkType',
        'modifyMode'   => 'modifyMode',
        'whiteIpList'  => 'whiteIpList',
        'whiteIpGroup' => 'whiteIpGroup',
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
        if (null !== $this->nodeType) {
            $res['nodeType'] = $this->nodeType;
        }
        if (null !== $this->networkType) {
            $res['networkType'] = $this->networkType;
        }
        if (null !== $this->modifyMode) {
            $res['modifyMode'] = $this->modifyMode;
        }
        if (null !== $this->whiteIpList) {
            $res['whiteIpList'] = $this->whiteIpList;
        }
        if (null !== $this->whiteIpGroup) {
            $res['whiteIpGroup'] = null !== $this->whiteIpGroup ? $this->whiteIpGroup->toMap() : null;
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
        if (isset($map['nodeType'])) {
            $model->nodeType = $map['nodeType'];
        }
        if (isset($map['networkType'])) {
            $model->networkType = $map['networkType'];
        }
        if (isset($map['modifyMode'])) {
            $model->modifyMode = $map['modifyMode'];
        }
        if (isset($map['whiteIpList'])) {
            if (!empty($map['whiteIpList'])) {
                $model->whiteIpList = $map['whiteIpList'];
            }
        }
        if (isset($map['whiteIpGroup'])) {
            $model->whiteIpGroup = whiteIpGroup::fromMap($map['whiteIpGroup']);
        }

        return $model;
    }
}
