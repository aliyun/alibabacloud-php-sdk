<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCSandbox\V20260509\Models;

use AlibabaCloud\Dara\Model;

class CreateApiKeyInput extends Model
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
     * @var string
     */
    public $teamID;
    protected $_name = [
        'apiKeyName' => 'apiKeyName',
        'expireTime' => 'expireTime',
        'teamID' => 'teamID',
    ];

    public function validate()
    {
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

        if (null !== $this->teamID) {
            $res['teamID'] = $this->teamID;
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

        if (isset($map['teamID'])) {
            $model->teamID = $map['teamID'];
        }

        return $model;
    }
}
