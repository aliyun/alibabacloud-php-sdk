<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\GetKyuubiTokenResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\GetKyuubiTokenResponseBody\data\autoExpireConfiguration;

class data extends Model
{
    /**
     * @var autoExpireConfiguration
     */
    public $autoExpireConfiguration;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $createdBy;

    /**
     * @var int
     */
    public $expireTime;

    /**
     * @var int
     */
    public $lastUsedTime;

    /**
     * @var string[]
     */
    public $memberArns;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $token;

    /**
     * @var string
     */
    public $tokenId;
    protected $_name = [
        'autoExpireConfiguration' => 'autoExpireConfiguration',
        'createTime' => 'createTime',
        'createdBy' => 'createdBy',
        'expireTime' => 'expireTime',
        'lastUsedTime' => 'lastUsedTime',
        'memberArns' => 'memberArns',
        'name' => 'name',
        'token' => 'token',
        'tokenId' => 'tokenId',
    ];

    public function validate()
    {
        if (null !== $this->autoExpireConfiguration) {
            $this->autoExpireConfiguration->validate();
        }
        if (\is_array($this->memberArns)) {
            Model::validateArray($this->memberArns);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoExpireConfiguration) {
            $res['autoExpireConfiguration'] = null !== $this->autoExpireConfiguration ? $this->autoExpireConfiguration->toArray($noStream) : $this->autoExpireConfiguration;
        }

        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->createdBy) {
            $res['createdBy'] = $this->createdBy;
        }

        if (null !== $this->expireTime) {
            $res['expireTime'] = $this->expireTime;
        }

        if (null !== $this->lastUsedTime) {
            $res['lastUsedTime'] = $this->lastUsedTime;
        }

        if (null !== $this->memberArns) {
            if (\is_array($this->memberArns)) {
                $res['memberArns'] = [];
                $n1 = 0;
                foreach ($this->memberArns as $item1) {
                    $res['memberArns'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->token) {
            $res['token'] = $this->token;
        }

        if (null !== $this->tokenId) {
            $res['tokenId'] = $this->tokenId;
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
        if (isset($map['autoExpireConfiguration'])) {
            $model->autoExpireConfiguration = autoExpireConfiguration::fromMap($map['autoExpireConfiguration']);
        }

        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['createdBy'])) {
            $model->createdBy = $map['createdBy'];
        }

        if (isset($map['expireTime'])) {
            $model->expireTime = $map['expireTime'];
        }

        if (isset($map['lastUsedTime'])) {
            $model->lastUsedTime = $map['lastUsedTime'];
        }

        if (isset($map['memberArns'])) {
            if (!empty($map['memberArns'])) {
                $model->memberArns = [];
                $n1 = 0;
                foreach ($map['memberArns'] as $item1) {
                    $model->memberArns[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['token'])) {
            $model->token = $map['token'];
        }

        if (isset($map['tokenId'])) {
            $model->tokenId = $map['tokenId'];
        }

        return $model;
    }
}
