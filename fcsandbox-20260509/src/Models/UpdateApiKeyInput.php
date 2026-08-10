<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCSandbox\V20260509\Models;

use AlibabaCloud\Dara\Model;

class UpdateApiKeyInput extends Model
{
    /**
     * @var string
     */
    public $apiKeyName;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var IPConfig[]
     */
    public $ipBlacklist;

    /**
     * @var IPConfig[]
     */
    public $ipWhitelist;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'apiKeyName' => 'apiKeyName',
        'expireTime' => 'expireTime',
        'ipBlacklist' => 'ipBlacklist',
        'ipWhitelist' => 'ipWhitelist',
        'status' => 'status',
    ];

    public function validate()
    {
        if (\is_array($this->ipBlacklist)) {
            Model::validateArray($this->ipBlacklist);
        }
        if (\is_array($this->ipWhitelist)) {
            Model::validateArray($this->ipWhitelist);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiKeyName) {
            $res['apiKeyName'] = $this->apiKeyName;
        }

        if (null !== $this->expireTime) {
            $res['expireTime'] = $this->expireTime;
        }

        if (null !== $this->ipBlacklist) {
            if (\is_array($this->ipBlacklist)) {
                $res['ipBlacklist'] = [];
                $n1 = 0;
                foreach ($this->ipBlacklist as $item1) {
                    $res['ipBlacklist'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->ipWhitelist) {
            if (\is_array($this->ipWhitelist)) {
                $res['ipWhitelist'] = [];
                $n1 = 0;
                foreach ($this->ipWhitelist as $item1) {
                    $res['ipWhitelist'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
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
        if (isset($map['apiKeyName'])) {
            $model->apiKeyName = $map['apiKeyName'];
        }

        if (isset($map['expireTime'])) {
            $model->expireTime = $map['expireTime'];
        }

        if (isset($map['ipBlacklist'])) {
            if (!empty($map['ipBlacklist'])) {
                $model->ipBlacklist = [];
                $n1 = 0;
                foreach ($map['ipBlacklist'] as $item1) {
                    $model->ipBlacklist[$n1] = IPConfig::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ipWhitelist'])) {
            if (!empty($map['ipWhitelist'])) {
                $model->ipWhitelist = [];
                $n1 = 0;
                foreach ($map['ipWhitelist'] as $item1) {
                    $model->ipWhitelist[$n1] = IPConfig::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
