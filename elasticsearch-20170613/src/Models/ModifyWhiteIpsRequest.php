<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ModifyWhiteIpsRequest\whiteIpGroup;

class ModifyWhiteIpsRequest extends Model
{
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

    /**
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'modifyMode' => 'modifyMode',
        'networkType' => 'networkType',
        'nodeType' => 'nodeType',
        'whiteIpGroup' => 'whiteIpGroup',
        'whiteIpList' => 'whiteIpList',
        'clientToken' => 'clientToken',
    ];

    public function validate()
    {
        if (null !== $this->whiteIpGroup) {
            $this->whiteIpGroup->validate();
        }
        if (\is_array($this->whiteIpList)) {
            Model::validateArray($this->whiteIpList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['whiteIpGroup'] = null !== $this->whiteIpGroup ? $this->whiteIpGroup->toArray($noStream) : $this->whiteIpGroup;
        }

        if (null !== $this->whiteIpList) {
            if (\is_array($this->whiteIpList)) {
                $res['whiteIpList'] = [];
                $n1 = 0;
                foreach ($this->whiteIpList as $item1) {
                    $res['whiteIpList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $model->whiteIpList = [];
                $n1 = 0;
                foreach ($map['whiteIpList'] as $item1) {
                    $model->whiteIpList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }

        return $model;
    }
}
