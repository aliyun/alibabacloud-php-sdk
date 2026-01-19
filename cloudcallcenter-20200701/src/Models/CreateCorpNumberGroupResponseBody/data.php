<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudCallCenter\V20200701\Models\CreateCorpNumberGroupResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $aliyunUid;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $numberCount;

    /**
     * @var string
     */
    public $numberGroupId;

    /**
     * @var string
     */
    public $numberGroupName;
    protected $_name = [
        'aliyunUid' => 'AliyunUid',
        'description' => 'Description',
        'numberCount' => 'NumberCount',
        'numberGroupId' => 'NumberGroupId',
        'numberGroupName' => 'NumberGroupName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliyunUid) {
            $res['AliyunUid'] = $this->aliyunUid;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->numberCount) {
            $res['NumberCount'] = $this->numberCount;
        }

        if (null !== $this->numberGroupId) {
            $res['NumberGroupId'] = $this->numberGroupId;
        }

        if (null !== $this->numberGroupName) {
            $res['NumberGroupName'] = $this->numberGroupName;
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
        if (isset($map['AliyunUid'])) {
            $model->aliyunUid = $map['AliyunUid'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['NumberCount'])) {
            $model->numberCount = $map['NumberCount'];
        }

        if (isset($map['NumberGroupId'])) {
            $model->numberGroupId = $map['NumberGroupId'];
        }

        if (isset($map['NumberGroupName'])) {
            $model->numberGroupName = $map['NumberGroupName'];
        }

        return $model;
    }
}
