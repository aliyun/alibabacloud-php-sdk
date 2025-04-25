<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListIntentionsResponseBody\data\intentList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListIntentionsResponseBody\data\intentList\userSay\userSayData;

class userSay extends Model
{
    /**
     * @var string
     */
    public $fromId;

    /**
     * @var string
     */
    public $id;

    /**
     * @var bool
     */
    public $strict;

    /**
     * @var userSayData[]
     */
    public $userSayData;
    protected $_name = [
        'fromId' => 'FromId',
        'id' => 'Id',
        'strict' => 'Strict',
        'userSayData' => 'UserSayData',
    ];

    public function validate()
    {
        if (\is_array($this->userSayData)) {
            Model::validateArray($this->userSayData);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fromId) {
            $res['FromId'] = $this->fromId;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->strict) {
            $res['Strict'] = $this->strict;
        }

        if (null !== $this->userSayData) {
            if (\is_array($this->userSayData)) {
                $res['UserSayData'] = [];
                $n1 = 0;
                foreach ($this->userSayData as $item1) {
                    $res['UserSayData'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['FromId'])) {
            $model->fromId = $map['FromId'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Strict'])) {
            $model->strict = $map['Strict'];
        }

        if (isset($map['UserSayData'])) {
            if (!empty($map['UserSayData'])) {
                $model->userSayData = [];
                $n1 = 0;
                foreach ($map['UserSayData'] as $item1) {
                    $model->userSayData[$n1++] = userSayData::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
