<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Advisor\V20180120\Models;

use AlibabaCloud\Dara\Model;

class DescribeCostOptimizationOverviewShrinkRequest extends Model
{
    /**
     * @var int
     */
    public $assumeAliyunId;

    /**
     * @var string
     */
    public $assumeAliyunIdListShrink;

    /**
     * @var string
     */
    public $token;
    protected $_name = [
        'assumeAliyunId' => 'AssumeAliyunId',
        'assumeAliyunIdListShrink' => 'AssumeAliyunIdList',
        'token' => 'Token',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assumeAliyunId) {
            $res['AssumeAliyunId'] = $this->assumeAliyunId;
        }

        if (null !== $this->assumeAliyunIdListShrink) {
            $res['AssumeAliyunIdList'] = $this->assumeAliyunIdListShrink;
        }

        if (null !== $this->token) {
            $res['Token'] = $this->token;
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
        if (isset($map['AssumeAliyunId'])) {
            $model->assumeAliyunId = $map['AssumeAliyunId'];
        }

        if (isset($map['AssumeAliyunIdList'])) {
            $model->assumeAliyunIdListShrink = $map['AssumeAliyunIdList'];
        }

        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }

        return $model;
    }
}
