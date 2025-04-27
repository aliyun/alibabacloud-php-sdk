<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateWhiteIpsRequest\whiteIpGroup;

class UpdateWhiteIpsRequest extends Model
{
    /**
     * @var string[]
     */
    public $esIPWhitelist;

    /**
     * @var whiteIpGroup
     */
    public $whiteIpGroup;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $modifyMode;
    protected $_name = [
        'esIPWhitelist' => 'esIPWhitelist',
        'whiteIpGroup' => 'whiteIpGroup',
        'clientToken' => 'clientToken',
        'modifyMode' => 'modifyMode',
    ];

    public function validate()
    {
        if (\is_array($this->esIPWhitelist)) {
            Model::validateArray($this->esIPWhitelist);
        }
        if (null !== $this->whiteIpGroup) {
            $this->whiteIpGroup->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->esIPWhitelist) {
            if (\is_array($this->esIPWhitelist)) {
                $res['esIPWhitelist'] = [];
                $n1 = 0;
                foreach ($this->esIPWhitelist as $item1) {
                    $res['esIPWhitelist'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->whiteIpGroup) {
            $res['whiteIpGroup'] = null !== $this->whiteIpGroup ? $this->whiteIpGroup->toArray($noStream) : $this->whiteIpGroup;
        }

        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }

        if (null !== $this->modifyMode) {
            $res['modifyMode'] = $this->modifyMode;
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
        if (isset($map['esIPWhitelist'])) {
            if (!empty($map['esIPWhitelist'])) {
                $model->esIPWhitelist = [];
                $n1 = 0;
                foreach ($map['esIPWhitelist'] as $item1) {
                    $model->esIPWhitelist[$n1++] = $item1;
                }
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
