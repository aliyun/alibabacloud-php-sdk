<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateKibanaWhiteIpsRequest\whiteIpGroup;

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
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $modifyMode;
    protected $_name = [
        'kibanaIPWhitelist' => 'kibanaIPWhitelist',
        'whiteIpGroup' => 'whiteIpGroup',
        'clientToken' => 'clientToken',
        'modifyMode' => 'modifyMode',
    ];

    public function validate()
    {
        if (\is_array($this->kibanaIPWhitelist)) {
            Model::validateArray($this->kibanaIPWhitelist);
        }
        if (null !== $this->whiteIpGroup) {
            $this->whiteIpGroup->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->kibanaIPWhitelist) {
            if (\is_array($this->kibanaIPWhitelist)) {
                $res['kibanaIPWhitelist'] = [];
                $n1 = 0;
                foreach ($this->kibanaIPWhitelist as $item1) {
                    $res['kibanaIPWhitelist'][$n1++] = $item1;
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
        if (isset($map['kibanaIPWhitelist'])) {
            if (!empty($map['kibanaIPWhitelist'])) {
                $model->kibanaIPWhitelist = [];
                $n1 = 0;
                foreach ($map['kibanaIPWhitelist'] as $item1) {
                    $model->kibanaIPWhitelist[$n1++] = $item1;
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
