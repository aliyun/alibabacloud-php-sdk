<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;

class UserSummaryModel extends Model
{
    /**
     * @var AccessTokenModel[]
     */
    public $accessTokens;

    /**
     * @var string
     */
    public $host;

    /**
     * @var string
     */
    public $ramUser;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'accessTokens' => 'AccessTokens',
        'host' => 'Host',
        'ramUser' => 'RamUser',
        'status' => 'Status',
        'userName' => 'UserName',
    ];

    public function validate()
    {
        if (\is_array($this->accessTokens)) {
            Model::validateArray($this->accessTokens);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessTokens) {
            if (\is_array($this->accessTokens)) {
                $res['AccessTokens'] = [];
                $n1 = 0;
                foreach ($this->accessTokens as $item1) {
                    $res['AccessTokens'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }

        if (null !== $this->ramUser) {
            $res['RamUser'] = $this->ramUser;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
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
        if (isset($map['AccessTokens'])) {
            if (!empty($map['AccessTokens'])) {
                $model->accessTokens = [];
                $n1 = 0;
                foreach ($map['AccessTokens'] as $item1) {
                    $model->accessTokens[$n1] = AccessTokenModel::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }

        if (isset($map['RamUser'])) {
            $model->ramUser = $map['RamUser'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
