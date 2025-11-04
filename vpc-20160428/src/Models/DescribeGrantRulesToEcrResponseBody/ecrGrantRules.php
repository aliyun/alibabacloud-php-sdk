<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeGrantRulesToEcrResponseBody;

use AlibabaCloud\Dara\Model;

class ecrGrantRules extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $ecrInstanceId;

    /**
     * @var int
     */
    public $ecrUid;
    protected $_name = [
        'createTime' => 'CreateTime',
        'ecrInstanceId' => 'EcrInstanceId',
        'ecrUid' => 'EcrUid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->ecrInstanceId) {
            $res['EcrInstanceId'] = $this->ecrInstanceId;
        }

        if (null !== $this->ecrUid) {
            $res['EcrUid'] = $this->ecrUid;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['EcrInstanceId'])) {
            $model->ecrInstanceId = $map['EcrInstanceId'];
        }

        if (isset($map['EcrUid'])) {
            $model->ecrUid = $map['EcrUid'];
        }

        return $model;
    }
}
